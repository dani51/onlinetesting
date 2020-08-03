<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesubjectsRequest;
use App\Http\Requests\UpdatesubjectsRequest;
use App\Repositories\subjectsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Flash;
use Response;

class subjectsController extends AppBaseController
{
    /** @var  subjectsRepository */
    private $subjectsRepository;

    public function __construct(subjectsRepository $subjectsRepo)
    {
        $this->middleware('auth:admin');
        $this->subjectsRepository = $subjectsRepo;
    }

    /**
     * Display a listing of the subjects.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $subjects = $this->subjectsRepository->all();

        return view('subjects.index')
            ->with('subjects', $subjects);
    }

    /**
     * Show the form for creating a new subjects.
     *
     * @return Response
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created subjects in storage.
     *
     * @param CreatesubjectsRequest $request
     *
     * @return Response
     */
    public function store(CreatesubjectsRequest $request)
    {
        $input = $request->all();
        $user_id = Auth::user()->id;
        $input["user_id"] = $user_id;
        
        $subjects = $this->subjectsRepository->create($input);

        Flash::success('Subjects saved successfully.');

        return redirect(route('subjects.index'));
    }

    /**
     * Display the specified subjects.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subjects = $this->subjectsRepository->find($id);

        if (empty($subjects)) {
            Flash::error('Subjects not found');

            return redirect(route('subjects.index'));
        }

        return view('subjects.show')->with('subjects', $subjects);
    }

    /**
     * Show the form for editing the specified subjects.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subjects = $this->subjectsRepository->find($id);

        if (empty($subjects)) {
            Flash::error('Subjects not found');

            return redirect(route('subjects.index'));
        }

        return view('subjects.edit')->with('subjects', $subjects);
    }

    /**
     * Update the specified subjects in storage.
     *
     * @param int $id
     * @param UpdatesubjectsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesubjectsRequest $request)
    {
        $subjects = $this->subjectsRepository->find($id);

        if (empty($subjects)) {
            Flash::error('Subjects not found');

            return redirect(route('subjects.index'));
        }

        $subjects = $this->subjectsRepository->update($request->all(), $id);

        Flash::success('Subjects updated successfully.');

        return redirect(route('subjects.index'));
    }

    /**
     * Remove the specified subjects from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subjects = $this->subjectsRepository->find($id);

        if (empty($subjects)) {
            Flash::error('Subjects not found');

            return redirect(route('subjects.index'));
        }

        $this->subjectsRepository->delete($id);

        Flash::success('Subjects deleted successfully.');

        return redirect(route('subjects.index'));
    }
}
