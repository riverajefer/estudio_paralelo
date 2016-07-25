<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateEstiloRequest;
use App\Http\Requests\UpdateEstiloRequest;
use App\Repositories\EstiloRepository;
use App\Http\Controllers\Admin\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EstiloController extends InfyOmBaseController
{
    /** @var  EstiloRepository */
    private $estiloRepository;

    public function __construct(EstiloRepository $estiloRepo)
    {
        $this->estiloRepository = $estiloRepo;
    }

    /**
     * Display a listing of the Estilo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estiloRepository->pushCriteria(new RequestCriteria($request));
        $estilos = $this->estiloRepository->all();

        return view('admin.estilos.index')
            ->with('estilos', $estilos);
    }

    /**
     * Show the form for creating a new Estilo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.estilos.create');
    }

    /**
     * Store a newly created Estilo in storage.
     *
     * @param CreateEstiloRequest $request
     *
     * @return Response
     */
    public function store(CreateEstiloRequest $request)
    {
        $input = $request->all();

        $estilo = $this->estiloRepository->create($input);

        Flash::success('Estilo saved successfully.');

        return redirect(route('admin.estilos.index'));
    }

    /**
     * Display the specified Estilo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estilo = $this->estiloRepository->findWithoutFail($id);

        if (empty($estilo)) {
            Flash::error('Estilo not found');

            return redirect(route('admin.estilos.index'));
        }

        return view('admin.estilos.show')->with('estilo', $estilo);
    }

    /**
     * Show the form for editing the specified Estilo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estilo = $this->estiloRepository->findWithoutFail($id);

        if (empty($estilo)) {
            Flash::error('Estilo not found');

            return redirect(route('admin.estilos.index'));
        }

        return view('admin.estilos.edit')->with('estilo', $estilo);
    }

    /**
     * Update the specified Estilo in storage.
     *
     * @param  int              $id
     * @param UpdateEstiloRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstiloRequest $request)
    {
        $estilo = $this->estiloRepository->findWithoutFail($id);

        if (empty($estilo)) {
            Flash::error('Estilo not found');

            return redirect(route('admin.estilos.index'));
        }

        $estilo = $this->estiloRepository->update($request->all(), $id);

        Flash::success('Estilo updated successfully.');

        return redirect(route('admin.estilos.index'));
    }

    /**
     * Remove the specified Estilo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estilo = $this->estiloRepository->findWithoutFail($id);

        if (empty($estilo)) {
            Flash::error('Estilo not found');

            return redirect(route('admin.estilos.index'));
        }

        $this->estiloRepository->delete($id);

        Flash::success('Estilo deleted successfully.');

        return redirect(route('admin.estilos.index'));
    }
}
