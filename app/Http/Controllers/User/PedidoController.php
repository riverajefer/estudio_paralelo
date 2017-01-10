<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\Espacio;
use App\Models\Estilo;
use App\Models\Color;
use App\Models\User;
use App\Models\Paquete;
use App\Models\Referente;
use App\Models\FotosEspaciosPedido;
use App\Models\AgendarCita;
use Auth;
use DB;
use Input;
use Validator;
class PedidoController extends Controller
{

    protected $user_id;
    protected $User;
    protected $pedido;
    protected $pedidos;
    
    public function __construct(){

       $this->user_id = Auth::user()->id;
       $this->User    = Auth::user();
       $this->pedidos = $this->User->pedidos()->where('completo', '1')->orderBy('created_at', 'desc')->get();

       $pedidos = $this->User->pedidos()->orderBy('created_at', 'desc')->first();

       if(empty($pedidos)){
            $this->pedido = new Pedido();
            $this->pedido->user_id = $this->user_id;
            $this->pedido->save();
        }else{
            $this->pedido = Pedido::find($pedidos->id);
        }
    }

    public function index()
    {
        $pedidos = $this->pedidos;
        return view('panels.user.pedidos.index', compact('pedidos'));
    }

    public function setEspacio()
    {
        $espacios = Espacio::all();
        return view('panels.user.filtro.espacio', compact('espacios'));
    }

    public function postEspacio(Request $request)
    {

        $this->pedido->espacio_id = $request->input('espacio');
        $this->pedido->paquete_id = 1;
        $this->pedido->estado = 'Sin envíar';
        $this->pedido->save();    

        return Redirect::to('user/seleccione_estilo');
    }

    public function setEstilo()
    {
    	$estilos = Estilo::all();
    	return view('panels.user.filtro.estilo')->with('estilos', $estilos);
    } 

    public function postEstilo(Request $request)
    {
        $this->pedido->estilo_id = $request->input('estilo');
        $this->pedido->save();
        return Redirect::to('user/seleccione_color');
    } 
    
    public function setColor()
    {
    	$colores = Color::all();
    	return view('panels.user.filtro.color')->with('colores', $colores);
    }
    public function postColor(Request $request)
    {
        $this->pedido->color_id = $request->input('color');
        $this->pedido->save();          
        return Redirect::to('user/seleccione_referentes');
    }  

    public function setReferentes()
    {
        $referentes = Referente::all();
        return view('panels.user.filtro.referentes')->with('referentes', $referentes);
    }  

    public function postReferentes(Request $request)
    {
      $ref  = $request->input('referente');
      $this->pedido->referentes()->sync($ref);
      return Redirect::to('user/subir_espacios');
    } 

   public function setSubirEspacios()
   {
     return view('panels.user.filtro.subir_espacios');
   } 

   public function postSubirEspacios(Request $request)
   {

        $files = Input::file('images');
        $file_count = count($files);
        $i = 1;

        foreach($files as $file){

            $rules = array('file' => 'mimes:jpeg,jpg,bmp,png,gif|max:6000');
            $validator = Validator::make(array('file'=> $file), $rules);

            if ($validator->fails()) {
                Session::flash('error', 'Uno de los archivos subidos no es valido'); 
                return Redirect::back()->withInput()->withErrors($validator);
            }            
            if ($file) {

                $destinationPath = 'uploads/referentes/'.'user_'.Auth::id().'/'.$this->pedido->id;
                $extension = $file->getClientOriginalExtension();
                $espacio =  'espacio'.$i;
                $fileName  = $espacio.'.'.$extension;
                $file->move($destinationPath, $fileName);

                $getFotos = FotosEspaciosPedido::where('pedido_id', $this->pedido->id)->where('espacio', $espacio)->first();
                if(empty($getFotos)){
                    $feu = new FotosEspaciosPedido();
                    $feu->pedido_id = $this->pedido->id;
                    $feu->espacio = $espacio;
                }else{
                    $feu = FotosEspaciosPedido::find($getFotos->id);
                }
                $feu->img = $fileName;
                $feu->save();  
                $i++;
            }

        }

        return Redirect::to('user/agendar');
    }    

    public function setAgendar()
    {
        return view('panels.user.filtro.agendar');
    } 

    public function postAgendar(Request $request)
    {

      $rules = array('fecha' => 'required');
      $validator = Validator::make(Input::all(), $rules);

      if ($validator->fails()) {
        Session::flash('error', 'La fecha es requerida'); 
        return Redirect::back()->withInput()->withErrors($validator);
      }

      $getAgenda = $this->pedido->AgendarCita()->first();
      if(empty($getAgenda)){ 

        $AgendarCita = new AgendarCita();
        $AgendarCita->pedido_id = $this->pedido->id;
        $AgendarCita->fecha = $request->input('fecha');
        $AgendarCita->observaciones = $request->input('observaciones');
        $AgendarCita->save();
        return Redirect::to('user/resumen');

      }else{
        //Session::flash('error', 'La cita ya está agendada');
        //return Redirect::back()->withInput();
        $AgendarCita = AgendarCita::find($getAgenda->id);
        $AgendarCita->fecha = $request->input('fecha');
        $AgendarCita->observaciones = $request->input('observaciones');
        $AgendarCita->save();
        
        return Redirect::to('user/resumen');

      } 
    }      

    public function setResumen()
    {

      $espacio_id = $this->pedido->espacio_id;
      $estilo_id  = $this->pedido->estilo_id;
      $color_id   = $this->pedido->color_id;
      $paquete_id = $this->pedido->paquete_id;

      $getAgenda  = $this->pedido->AgendarCita()->first();
      $fecha_cita = $getAgenda->fecha;

      $espacios  = Espacio::all(['id', 'titulo']);
      $estilos   = Estilo::all(['id', 'titulo']);
      $colores   = Color::all(['id', 'titulo']);
      $paquetes  = Paquete::all(['id', 'titulo']);
      
      return view('panels.user.filtro.resumen', compact('espacios', 'espacio_id', 'estilos', 'estilo_id', 'colores', 'color_id', 'paquetes', 'paquete_id', 'fecha_cita'));
    }


    public function postResumen(Request $request)
    {

      $espacio_id =  Input::get('espacio_id');
      $estilo_id  =  Input::get('estilo_id');
      $color_id   =  Input::get('color_id');
      $paquete_id =  Input::get('paquete_id');
      $fecha      =  Input::get('fecha');

      $this->pedido->espacio_id = $espacio_id;
      $this->pedido->estilo_id = $estilo_id;
      $this->pedido->color_id = $color_id;
      $this->pedido->paquete_id = $paquete_id;
      $this->pedido->completo = 1;
      $this->pedido->estado = 'ENVÍADO';
      $this->pedido->save();

      $getAgenda = $this->pedido->AgendarCita()->first();
      $agenda = AgendarCita::find($getAgenda->id);
      $agenda->fecha = $fecha;
      $agenda->save();

      return Redirect::to('user/pedidos/'.$this->pedido->id);

    }

    public function show($id)
    {
      $pedido = Pedido::findOrFail($id);
      return view('panels.user.pedidos.show', compact('pedido'));
    }

    public function nuevoPedido()
    {
       $pedido = new Pedido();
       $pedido->user_id = $this->user_id;
       $pedido->estado = 'Sin envíar';
       $pedido->save();
       return Redirect::to('user/seleccione_espacio');
    }

}
