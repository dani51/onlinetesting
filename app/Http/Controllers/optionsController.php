<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateoptionsRequest;
use App\Http\Requests\UpdateoptionsRequest;
use App\Models\questions;
use App\Models\subjects;
use App\Repositories\optionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;
use DB;

class optionsController extends AppBaseController
{
    /** @var  optionsRepository */
    private $optionsRepository;

    public function __construct(optionsRepository $optionsRepo)
    {
        $this->middleware('auth:admin');
        $this->optionsRepository = $optionsRepo;
    }

    /**
     * Display a listing of the options.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $options = $this->optionsRepository->all();
        $question = subjects::select('id','subject_name')->get();

        return view('options.index')
            ->with('options', $options)->with('question',$question);
    }

    /**
     * Show the form for creating a new options.
     *
     * @return Response
     */
    public function create()
    {
        $question=new questions();
        $question=$question->all();

        $subjects = subjects::select("id","subject_name")->get();
        

        return view('options.create',compact('question','subjects'));
    }
    

    /**
     * Store a newly created options in storage.
     *
     * @param CreateoptionsRequest $request
     *
     * @return Response
     */
    public function store(CreateoptionsRequest $request)
    {
//                dd($request);
        $input = $request->all();
        $question_id = $request->input('question_id');
        $answer = $request->input('answer');

        $options = $request->input('option_name');
        $count=count($options);
//        dd($count);
        $question=[];

        foreach ($options as $op){

            $question=[
              'question_id'=> $question_id,
                'option_name'=>$op,
                'answer'=>$answer
            ];
            $this->optionsRepository->create($question);
        }
        questions::where("id","=",$question_id)->update(['option_no'=>$count]);

//        dd($input);


//        $options = $this->optionsRepository->create($input);

        Flash::success('Options saved successfully.');

        return redirect(route('options.index'));
    }

    /**
     * Display the specified options.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $options = $this->optionsRepository->find($id);

        if (empty($options)) {
            Flash::error('Options not found');

            return redirect(route('options.index'));
        }

        return view('options.show')->with('options', $options);
    }

    /**
     * Show the form for editing the specified options.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $question=new questions();
        $question=$question->all();


        $options = $this->optionsRepository->find($id);

        if (empty($options)) {
            Flash::error('Options not found');

            return redirect(route('options.index'));
        }

        return view('options.edit',compact('question','options'));
    }

    /**
     * Update the specified options in storage.
     *
     * @param int $id
     * @param UpdateoptionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateoptionsRequest $request)
    {

        $options = $this->optionsRepository->find($id);

        if (empty($options)) {
            Flash::error('Options not found');

            return redirect(route('options.index'));
        }
        
        $data_update = $request->all();
        unset($data_update["_token"]);
        unset($data_update["_method"]);
        
        //  print_r($data_update);
        // exit();
        $options = $this->optionsRepository->update($data_update, $id);

        Flash::success('Options updated successfully.');

        return redirect(route('options.index'));
    }

    /**
     * Remove the specified options from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $options = $this->optionsRepository->find($id);

        if (empty($options)) {
            Flash::error('Options not found');

            return redirect(route('options.index'));
        }
        
        $data = DB::select("SELECT admins.id FROM `admins`,subjects,questions,options where options.id = '$id' && options.question_id = questions.id && questions.subject_id = subjects.id && subjects.user_id = admins.id" ) ;
        if($data){
            $get_id = $data[0]->id;
            $admin_id = Auth::user()->id;   
            
            if($get_id === $admin_id){
                $this->optionsRepository->delete($id);
                Flash::success('Options deleted successfully.');
                return redirect(route('options.index'));
            }
            else{
                Flash::error('Options not found');
            }    
        }
        
        Flash::error('Options not found');
        return redirect(route('options.index'));
    }
    
    public function fetch_options_group(Request $request){
        
        //print_r($request->level_id);
        if(!empty($request->level_id)){
            
            $level_id = $request->level_id;
            $level = trim($level_id);
            
            // $data = questions::where('subject_id',$level)->get();
            //
            $data = DB::select("SELECT options.* FROM `options` inner JOIN questions on options.question_id = questions.id && questions.subject_id = " . $level ." && options.deleted_at IS Null" ) ;

            $subjects = array();
            
            if(!empty($data)){
                
                $output = "";
                foreach ($data as $dataval) {
                    // <form method="post" action="options/"></form>
                    $output .= '<tr><td>'. $dataval->question_id .'</td><td> '. $dataval->option_name.' </td><td><div class="btn-group"><a href="/options/{{' . $dataval->id .'}}" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a><a href="/options/{{' . $dataval->id .'}}/edit" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-edit"></i></a><a href="/delete_options/' . $dataval->id .'" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a></div> </td></tr>'; 
                }

                echo $output;
                 

            }
            
        }
        else{
            echo false; 
            // echo json_encode(array('status' => 'error'));    
        }
        
        
    }
}
