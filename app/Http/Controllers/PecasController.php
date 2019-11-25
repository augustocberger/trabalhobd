<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePecasRequest;
use App\Http\Requests\UpdatePecasRequest;
use App\Repositories\PecasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PecasController extends AppBaseController
{
    /** @var  PecasRepository */
    private $pecasRepository;

    public function __construct(PecasRepository $pecasRepo)
    {
        $this->pecasRepository = $pecasRepo;
    }

    /**
     * Display a listing of the Pecas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pecas = $this->pecasRepository->all();

        return view('pecas.index')
            ->with('pecas', $pecas);
    }

    /**
     * Show the form for creating a new Pecas.
     *
     * @return Response
     */
    public function create()
    {
        return view('pecas.create');
    }

    /**
     * Store a newly created Pecas in storage.
     *
     * @param CreatePecasRequest $request
     *
     * @return Response
     */
    public function store(CreatePecasRequest $request)
    {
        $input = $request->all();

        $pecas = $this->pecasRepository->create($input);

        Flash::success('Pecas saved successfully.');

        return redirect(route('pecas.index'));
    }

    /**
     * Display the specified Pecas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pecas = $this->pecasRepository->find($id);

        if (empty($pecas)) {
            Flash::error('Pecas not found');

            return redirect(route('pecas.index'));
        }

        return view('pecas.show')->with('pecas', $pecas);
    }

    /**
     * Show the form for editing the specified Pecas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pecas = $this->pecasRepository->find($id);

        if (empty($pecas)) {
            Flash::error('Pecas not found');

            return redirect(route('pecas.index'));
        }

        return view('pecas.edit')->with('pecas', $pecas);
    }

    /**
     * Update the specified Pecas in storage.
     *
     * @param int $id
     * @param UpdatePecasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePecasRequest $request)
    {
        $pecas = $this->pecasRepository->find($id);

        if (empty($pecas)) {
            Flash::error('Pecas not found');

            return redirect(route('pecas.index'));
        }

        $pecas = $this->pecasRepository->update($request->all(), $id);

        Flash::success('Pecas updated successfully.');

        return redirect(route('pecas.index'));
    }

    /**
     * Remove the specified Pecas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pecas = $this->pecasRepository->find($id);

        if (empty($pecas)) {
            Flash::error('Pecas not found');

            return redirect(route('pecas.index'));
        }

        $this->pecasRepository->delete($id);

        Flash::success('Pecas deleted successfully.');

        return redirect(route('pecas.index'));
    }
}
