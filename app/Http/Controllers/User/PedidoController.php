<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Filtro;
use App\Models\Espacio;
use App\Models\Estilo;
use App\Models\Color;
use App\Models\User;
use App\Models\Paquete;
use App\Models\Referente;
use Auth;
use DB;

class PedidoController extends Controller
{

    protected $user_id;

    public function __construct(){
      $this->user_id = Auth::user()->id;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $pedidos = Filtro::where('user_id', $this->user_id)->get();

        //return $pedidos =  DB::table('filtro')->where('user_id', $this->user_id);
        if(empty($pedidos)){
            return Redirect::to('user/seleccione_espacio');
        }
       //return view('panels.user.pedidos.index', compact('pedidos'));
       return view('panels.user.pedidos.index', compact('pedidos'));
    }


    public function nuevoPedido()
    {
       $filtro = new Filtro();
       $filtro->user_id = $this->user_id;
       $filtro->estado = 'Sin envíar';
       $filtro->save();
       return Redirect::to('user/seleccione_espacio');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $filtro = Filtro::find($id);
      if(empty($filtro)){
        return Redirect::to('user/seleccione_espacio');
      }
      return view('panels.user.pedidos.show', compact('filtro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
