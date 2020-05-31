<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatequestionsRequest;
use App\Http\Requests\UpdatequestionsRequest;
use App\Models\subjects;
use App\Repositories\questionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class questionsController extends AppBaseController
{
    /** @var  questionsRepository */
    private $questionsRepository;

    public function __construct(questionsRepository $questionsRepo)
    {
        $this->middleware('auth:admin');
        $this->questionsRepository = $questionsRepo;
    }

    /**
     * Display a listing of the questions.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $questions = $this->questionsRepository->all();

        return view('questions.index')
            ->with('questions', $questions);
    }

    /**
     * Show the form for creating a new questions.
     *
     * @return Response
     */
    public function create()
    {
        $subjects=new subjects();
        $subjects=$subjects->all();

        return view('questions.create',compact('subjects'));
    }

    /**
     * Store a newly created questions in storage.
     *
     * @param CreatequestionsRequest $request
     *
     * @return Response
     */
    public function store(CreatequestionsRequest $request)
    {
        $input = $request->all();


        $questions = $this->questionsRepository->create($input);

        Flash::success('Questions saved successfully.');

        return redirect(route('questions.index'));
    }

    /**
     * Display the specified questions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $questions = $this->questionsRepository->find($id);

        if (empty($questions)) {
            Flash::error('Questions not found');

            return redirect(route('questions.index'));
        }

        return view('questions.show')->with('questions', $questions);
    }

    /**
     * Show the form for editing the specified questions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subjects=new subjects();
        $subjects=$subjects->all();
//        echo "<pre>";
//        print_r($subjects);
//        exit();


        $questions = $this->questionsRepository->find($id);

        if (empty($questions)) {
            Flash::error('Questions not found');

            return redirect(route('questions.index'));
        }

        return view('questions.edit',compact('subjects','questions'));
    }

    /**
     * Update the specified questions in storage.
     *
     * @param int $id
     * @param UpdatequestionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatequestionsRequest $request)
    {
        $questions = $this->questionsRepository->find($id);

        if (empty($questions)) {
            Flash::error('Questions not found');

            return redirect(route('questions.index'));
        }

        $questions = $this->questionsRepository->update($request->all(), $id);

        Flash::success('Questions updated successfully.');

        return redirect(route('questions.index'));
    }

    /**
     * Remove the specified questions from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $questions = $this->questionsRepository->find($id);

        if (empty($questions)) {
            Flash::error('Questions not found');

            return redirect(route('questions.index'));
        }

        $this->questionsRepository->delete($id);

        Flash::success('Questions deleted successfully.');

        return redirect(route('questions.index'));
    }
}
