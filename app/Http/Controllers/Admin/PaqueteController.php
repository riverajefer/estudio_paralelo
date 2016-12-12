<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreatePaqueteRequest;
use App\Http\Requests\UpdatePaqueteRequest;
use App\Repositories\PaqueteRepository;
use App\Http\Controllers\Admin\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PaqueteController extends InfyOmBaseController
{
    /** @var  PaqueteRepository */
    private $paqueteRepository;

    public function __construct(PaqueteRepository $paqueteRepo)
    {
        $this->paqueteRepository = $paqueteRepo;
    }

    /**
     * Display a listing of the Paquete.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->paqueteRepository->pushCriteria(new RequestCriteria($request));
        $paquetes = $this->paqueteRepository->all();

        return view('admin.paquetes.index')
            ->with('paquetes', $paquetes);
    }

    /**
     * Show the form for creating a new Paquete.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.paquetes.create');
    }

    /**
     * Store a newly created Paquete in storage.
     *
     * @param CreatePaqueteRequest $request
     *
     * @return Response
     */
    public function store(CreatePaqueteRequest $request)
    {
        $input = $request->all();

        $paquete = $this->paqueteRepository->create($input);

        Flash::success('Paquete saved successfully.');

        return redirect(route('admin.paquetes.index'));
    }

    /**
     * Display the specified Paquete.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $paquete = $this->paqueteRepository->findWithoutFail($id);

        if (empty($paquete)) {
            Flash::error('Paquete not found');

            return redirect(route('admin.paquetes.index'));
        }

        return view('admin.paquetes.show')->with('paquete', $paquete);
    }

    /**
     * Show the form for editing the specified Paquete.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paquete = $this->paqueteRepository->findWithoutFail($id);

        if (empty($paquete)) {
            Flash::error('Paquete not found');

            return redirect(route('admin.paquetes.index'));
        }

        return view('admin.paquetes.edit')->with('paquete', $paquete);
    }

    /**
     * Update the specified Paquete in storage.
     *
     * @param  int              $id
     * @param UpdatePaqueteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaqueteRequest $request)
    {
        $paquete = $this->paqueteRepository->findWithoutFail($id);

        if (empty($paquete)) {
            Flash::error('Paquete not found');

            return redirect(route('admin.paquetes.index'));
        }

        $paquete = $this->paqueteRepository->update($request->all(), $id);

        Flash::success('Paquete updated successfully.');

        return redirect(route('admin.paquetes.index'));
    }

    /**
     * Remove the specified Paquete from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paquete = $this->paqueteRepository->findWithoutFail($id);

        if (empty($paquete)) {
            Flash::error('Paquete not found');

            return redirect(route('admin.paquetes.index'));
        }

        $this->paqueteRepository->delete($id);

        Flash::success('Paquete deleted successfully.');

        return redirect(route('admin.paquetes.index'));
    }
}
