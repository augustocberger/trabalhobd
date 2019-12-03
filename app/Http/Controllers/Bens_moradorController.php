<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBens_moradorRequest;
use App\Http\Requests\UpdateBens_moradorRequest;
use App\Repositories\Bens_moradorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Bens;
use App\Models\Moradores;

class Bens_moradorController extends AppBaseController
{
    /** @var  Bens_moradorRepository */
    private $bensMoradorRepository;

    public function __construct(Bens_moradorRepository $bensMoradorRepo)
    {
        $this->bensMoradorRepository = $bensMoradorRepo;
    }

    /**
     * Display a listing of the Bens_morador.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bensMoradors = $this->bensMoradorRepository->all();

        return view('bens_moradors.index')
            ->with('bensMoradors', $bensMoradors);
    }

    /**
     * Show the form for creating a new Bens_morador.
     *
     * @return Response
     */
    public function create()
    {
        return view('bens_moradors.create');
    }

    /**
     * Store a newly created Bens_morador in storage.
     *
     * @param CreateBens_moradorRequest $request
     *
     * @return Response
     */
    public function store(CreateBens_moradorRequest $request)
    {
        $input = $request->all();

        $bensMorador = $this->bensMoradorRepository->create($input);

        Flash::success('Bens Morador saved successfully.');

        return redirect(route('bensMoradors.index'));
    }

    /**
     * Display the specified Bens_morador.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bensMorador = $this->bensMoradorRepository->find($id);

        if (empty($bensMorador)) {
            Flash::error('Bens Morador not found');

            return redirect(route('bensMoradors.index'));
        }

        return view('bens_moradors.show')->with('bensMorador', $bensMorador);
    }

    /**
     * Show the form for editing the specified Bens_morador.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bensMorador = $this->bensMoradorRepository->find($id);

        if (empty($bensMorador)) {
            Flash::error('Bens Morador not found');

            return redirect(route('bensMoradors.index'));
        }

        return view('bens_moradors.edit')->with('bensMorador', $bensMorador);
    }

    /**
     * Update the specified Bens_morador in storage.
     *
     * @param int $id
     * @param UpdateBens_moradorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBens_moradorRequest $request)
    {
        $bensMorador = $this->bensMoradorRepository->find($id);

        if (empty($bensMorador)) {
            Flash::error('Bens Morador not found');

            return redirect(route('bensMoradors.index'));
        }

        $bensMorador = $this->bensMoradorRepository->update($request->all(), $id);

        Flash::success('Bens Morador updated successfully.');

        return redirect(route('bensMoradors.index'));
    }

    /**
     * Remove the specified Bens_morador from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bensMorador = $this->bensMoradorRepository->find($id);

        if (empty($bensMorador)) {
            Flash::error('Bens Morador not found');

            return redirect(route('bensMoradors.index'));
        }

        $this->bensMoradorRepository->delete($id);

        Flash::success('Bens Morador deleted successfully.');

        return redirect(route('bensMoradors.index'));
    }
}
