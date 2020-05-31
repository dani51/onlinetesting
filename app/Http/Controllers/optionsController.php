<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateoptionsRequest;
use App\Http\Requests\UpdateoptionsRequest;
use App\Models\questions;
use App\Repositories\optionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

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

        return view('options.index')
            ->with('options', $options);
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

        return view('options.create',compact('question'));
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

        $options = $this->optionsRepository->update($request->all(), $id);

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

        $this->optionsRepository->delete($id);

        Flash::success('Options deleted successfully.');

        return redirect(route('options.index'));
    }
}
