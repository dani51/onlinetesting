<?php

namespace App\Http\Controllers;

use App\Models\options;
use App\Models\questions;
use App\Models\subjects;
use App\result;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Laracasts\Flash\Flash;

class UserPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //        calling  subject model and  get data of all subject
        $subjects=new subjects();
        $subjects=$subjects->all();

//        dd(Session::all());
        //in subject vairable and pass it to view
        return view("user-sections.user-subjects",compact('subjects'));
    }

    public function searchSubject(Request $request)
    {
//        $q = Input::get ( 'q' );
        $q = $request->input('search');
        if(!empty($q)){

            $subjects = DB::table('subjects')->where('subject_name','LIKE','%'.$q.'%')->get();

            if(count($subjects) > 0)
                return view("user-sections.user-subjects",compact('subjects'));
            else return view("user-sections.user-subjects",compact('subjects'))->withMessage('No Details found. Try to search again !');

        }else{

            return \redirect()->route(' user-subjects');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function displayTest(Request $request){
        //check user is able to give test
        $use_id = Auth::user()->id;
        $subject_id = $request->id;
        

        $check = DB::table('results')->where('user_id', $use_id)->where('subject_name', $subject_id)->get();
        
        if(count($check)>0){
            //print_r($check);
            //print_r($check[0]->obtain_marks);
            $marks = $check[0]->obtain_marks;
            $counterpass=$check[0]->correct_mcqs;
            $countertotal =$check[0]->total_mcqs;
            $counterfail = $check[0]->fail_mcqs;
            //exit();
            //return view("user-sections.complete");
            return view('user-sections.thankyou',compact('marks','countertotal','counterpass','counterfail'));
        }
        else{



            $questions=new questions();
            $questions=DB::table('subjects as s')->select("s.id as s_id","q.id as q_id","q.*","s.*")
                ->rightjoin('questions as q','q.subject_id','=','s.id')
                ->where("s.id","=",$request->id)->get();

            $questions2=DB::table('questions as q')->select("q.id as q_id","q.*","op.*")
                ->rightjoin('options as op','op.question_id','=','q.id')
                ->where("q.subject_id","=",$request->id)->get();
            $i=0;
           // dd($questions);
            $timer=0;
            if($questions){
                foreach ($questions as $q){

                    $timer=$q->subject_test_time;
    //                print_r($timer);
    //                exit();
                    $option=DB::table('questions as q')
                        ->select("q.id as q_id","op.id as op_id","q.*","op.*")
                        ->rightjoin('options as op','op.question_id','=','q.id')
                        ->where("question_id","=",$q->q_id)->get();
                    $i++;
                }
            }



    //        dd($option);
    //        $pending= DB::table('subjects as s')
    //            ->rightjoin('questions as q','q.subject_id','=','s.id')
    //            ->rightjoin('options as op','op.question_id','=','q.id')
    //            ->select(DB::raw('s.id as sub_id,max(op.option_name) as oname,max(s.subject_name) as sname,max(q.id) as q_id,max(op.id) as op_id,max(s.subject_test_time) as test_time'))
    //            ->where("q.subject_id","=",$request->id)
    //            ->groupBy("s.id")
    //
    //            ->get();

            if ($questions->isEmpty()){

                Flash::error('No Question found');

                return redirect('/user-subjects')->with('questions');

            }
            else{
                return view('user-sections.test-page',compact('questions','questions2','timer'));
            }
        }    
    }

    public function thanks()
    {
        return view('user-sections.thankyou');
    }

    public function testSubmission(Request $request)
    {
        $use_id = Auth::user()->id;
        $subject_id = $request->input('subject-name');
        

        $check = DB::table('results')->where('user_id', $use_id)->where('subject_name', $subject_id)->get();
        if(count($check)>0){
            return redirect('/user-subjects');
        }
        $option=Input::except('_token','user-name');
//        $option=$request->all()->except('_token');
//        dd(Input::except('password','avatar'));
        $marks=0;
        $tmarks=0;
        $countertotal=0;
        $counterpass=0;
        $counterfail=0;
       foreach ($option as $op){

           $op=explode('__',$op);



           $username=$request->input('user-name');

           if(!empty($op[0]) && !empty($op[1])){
               if($op[0]==$op[1]){
                $marks=$marks+5;
                   $counterpass++;

               }

           }
           $countertotal++;


       }
        $tmarks=$countertotal*5;

        $counterfail=abs($countertotal-$counterpass);
       $result=[
           'user_id'=>Auth::user()->id,
           'user_name'=>Auth::user()->name,
           'subject_name'=> $request->input('subject-name'),
           'total_marks'=>$tmarks,
           'total_mcqs'=>$countertotal,
           'correct_mcqs'=>$counterpass,
           'fail_mcqs'=>$counterfail,
           'obtain_marks'=>$marks,
           'created_at'=>now()
       ];
       result::insert($result);
//        user_name
//        subject_name
//        total_marks
//        total_mcqs
//        correct_mcqs
//        fail_mcqs
//        obtain_marks



        return view('user-sections.thankyou',compact('marks','username','countertotal','counterpass','counterfail'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function signup(Request $request){

        return view("user-auth.signup");
    }
    public function getsignup(Request $request){
       $userID= DB::table('user_login')->insertGetId([
            'name' =>$request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        $userData=DB::table('user_login')->where("id","=",$userID)->get();
        Session::start();
        Session::set('user-name', $userData->name);
        return view("user-frontend.index",compact("userData"));
    }
    public function login(){
        return view("user-auth.login");
    }
    public function destroy($id)
    {
        //
    }

}
