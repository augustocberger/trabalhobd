<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBensRequest;
use App\Http\Requests\UpdateBensRequest;
use App\Repositories\BensRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use app\models\Bens;

use Flash;
use Response;

class BensController extends AppBaseController
{
    /** @var  BensRepository */
    private $bensRepository;

    public function __construct(BensRepository $bensRepo)
    {
        $this->bensRepository = $bensRepo;
    }

    /**
     * Display a listing of the Bens.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bens = $this->bensRepository->all();

        return view('bens.index')
            ->with('bens', $bens);
    }

    /**
     * Show the form for creating a new Bens.
     *
     * @return Response
     */
    public function create()
    {
        return view('bens.create');
    }

    /**
     * Store a newly created Bens in storage.
     *
     * @param CreateBensRequest $request
     *
     * @return Response
     */
    public function store(CreateBensRequest $request)
    {
        $input = $request->all();

        $bens = $this->bensRepository->create($input);

        Flash::success('Bens saved successfully.');

        return redirect(route('bens.index'));
    }

    /**
     * Display the specified Bens.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bens = $this->bensRepository->find($id);

        if (empty($bens)) {
            Flash::error('Bens not found');

            return redirect(route('bens.index'));
        }

        return view('bens.show')->with('bens', $bens);
    }

    /**
     * Show the form for editing the specified Bens.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bens = $this->bensRepository->find($id);

        if (empty($bens)) {
            Flash::error('Bens not found');

            return redirect(route('bens.index'));
        }

        return view('bens.edit')->with('bens', $bens);
    }

    /**
     * Update the specified Bens in storage.
     *
     * @param int $id
     * @param UpdateBensRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBensRequest $request)
    {
        $bens = $this->bensRepository->find($id);

        if (empty($bens)) {
            Flash::error('Bens not found');

            return redirect(route('bens.index'));
        }

        $bens = $this->bensRepository->update($request->all(), $id);

        Flash::success('Bens updated successfully.');

        return redirect(route('bens.index'));
    }

    /**
     * Remove the specified Bens from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bens = $this->bensRepository->find($id);

        if (empty($bens)) {
            Flash::error('Bens not found');

            return redirect(route('bens.index'));
        }

        $this->bensRepository->delete($id);

        Flash::success('Bens deleted successfully.');

        return redirect(route('bens.index'));
    }
}
