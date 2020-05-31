<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateoptionsAPIRequest;
use App\Http\Requests\API\UpdateoptionsAPIRequest;
use App\Models\options;
use App\Repositories\optionsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class optionsController
 * @package App\Http\Controllers\API
 */

class optionsAPIController extends AppBaseController
{
    /** @var  optionsRepository */
    private $optionsRepository;

    public function __construct(optionsRepository $optionsRepo)
    {
        $this->optionsRepository = $optionsRepo;
    }

    /**
     * Display a listing of the options.
     * GET|HEAD /options
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $options = $this->optionsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($options->toArray(), 'Options retrieved successfully');
    }

    /**
     * Store a newly created options in storage.
     * POST /options
     *
     * @param CreateoptionsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateoptionsAPIRequest $request)
    {
        $input = $request->all();

        $options = $this->optionsRepository->create($input);

        return $this->sendResponse($options->toArray(), 'Options saved successfully');
    }

    /**
     * Display the specified options.
     * GET|HEAD /options/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var options $options */
        $options = $this->optionsRepository->find($id);

        if (empty($options)) {
            return $this->sendError('Options not found');
        }

        return $this->sendResponse($options->toArray(), 'Options retrieved successfully');
    }

    /**
     * Update the specified options in storage.
     * PUT/PATCH /options/{id}
     *
     * @param int $id
     * @param UpdateoptionsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateoptionsAPIRequest $request)
    {
        $input = $request->all();

        /** @var options $options */
        $options = $this->optionsRepository->find($id);

        if (empty($options)) {
            return $this->sendError('Options not found');
        }

        $options = $this->optionsRepository->update($input, $id);

        return $this->sendResponse($options->toArray(), 'options updated successfully');
    }

    /**
     * Remove the specified options from storage.
     * DELETE /options/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var options $options */
        $options = $this->optionsRepository->find($id);

        if (empty($options)) {
            return $this->sendError('Options not found');
        }

        $options->delete();

        return $this->sendResponse($id, 'Options deleted successfully');
    }
}
