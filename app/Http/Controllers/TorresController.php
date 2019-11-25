<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTorresRequest;
use App\Http\Requests\UpdateTorresRequest;
use App\Repositories\TorresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TorresController extends AppBaseController
{
    /** @var  TorresRepository */
    private $torresRepository;

    public function __construct(TorresRepository $torresRepo)
    {
        $this->torresRepository = $torresRepo;
    }

    /**
     * Display a listing of the Torres.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $torres = $this->torresRepository->all();

        return view('torres.index')
            ->with('torres', $torres);
    }

    /**
     * Show the form for creating a new Torres.
     *
     * @return Response
     */
    public function create()
    {
        return view('torres.create');
    }

    /**
     * Store a newly created Torres in storage.
     *
     * @param CreateTorresRequest $request
     *
     * @return Response
     */
    public function store(CreateTorresRequest $request)
    {
        $input = $request->all();

        $torres = $this->torresRepository->create($input);

        Flash::success('Torres saved successfully.');

        return redirect(route('torres.index'));
    }

    /**
     * Display the specified Torres.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $torres = $this->torresRepository->find($id);

        if (empty($torres)) {
            Flash::error('Torres not found');

            return redirect(route('torres.index'));
        }

        return view('torres.show')->with('torres', $torres);
    }

    /**
     * Show the form for editing the specified Torres.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $torres = $this->torresRepository->find($id);

        if (empty($torres)) {
            Flash::error('Torres not found');

            return redirect(route('torres.index'));
        }

        return view('torres.edit')->with('torres', $torres);
    }

    /**
     * Update the specified Torres in storage.
     *
     * @param int $id
     * @param UpdateTorresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTorresRequest $request)
    {
        $torres = $this->torresRepository->find($id);

        if (empty($torres)) {
            Flash::error('Torres not found');

            return redirect(route('torres.index'));
        }

        $torres = $this->torresRepository->update($request->all(), $id);

        Flash::success('Torres updated successfully.');

        return redirect(route('torres.index'));
    }

    /**
     * Remove the specified Torres from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $torres = $this->torresRepository->find($id);

        if (empty($torres)) {
            Flash::error('Torres not found');

            return redirect(route('torres.index'));
        }

        $this->torresRepository->delete($id);

        Flash::success('Torres deleted successfully.');

        return redirect(route('torres.index'));
    }
}
