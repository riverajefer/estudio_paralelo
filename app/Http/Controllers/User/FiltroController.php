<?php 
namespace App\Http\Controllers\User;
use Input;
use Validator;
use Redirect;
//use Request;
use Session;
use Auth;
use App\Http\Controllers\Controller;
use App\Models\Espacio;
use App\Models\Estilo;
use App\Models\Color;
use App\Models\User;
use App\Models\Referente;
use App\Models\FotosEspaciosUser;
use App\Models\AgendarCita;
use Illuminate\Http\Request;
use App\Models\Filtro;
use DB;

class FiltroController extends Controller {

    protected $user_id;

    public function __construct(){
      $this->user_id = Auth::user()->id;
    }

    public function setEspacio()
    {
    	$espacios = Espacio::all();
    	return view('panels.user.filtro.espacio')->with('espacios', $espacios);
    }

    public function postEspacio(Request $request)
    {

      $getFiltro = DB::table('filtro')->where('user_id', $this->user_id)->first();

      if(empty($getFiltro)){
          $filtro = new Filtro();
          $filtro->user_id = $this->user_id;
        }else{
          $filtro = Filtro::find($getFiltro->id);
        }

      $filtro->espacio_id = $request->input('espacio');
      $filtro->save();    
      return Redirect::to('user/seleccione_estilo');
    }


    public function setEstilo()
    {
    	$estilos = Estilo::all();
    	return view('panels.user.filtro.estilo')->with('estilos', $estilos);
    } 


    public function postEstilo(Request $request)
    {

      $getFiltro = DB::table('filtro')->where('user_id', $this->user_id)->first();

      $filtro = new Filtro();

      if(empty($getFiltro)){
          $filtro->user_id = $this->user_id;
        }else{
          $filtro = Filtro::find($getFiltro->id);          
        }

      $filtro->estilo_id = $request->input('estilo');
      $filtro->save();
      return Redirect::to('user/seleccione_color');
    } 

    public function setColor()
    {
    	$colores = Color::all();
    	return view('panels.user.filtro.color')->with('colores', $colores);
    }  


    public function postColor(Request $request)
    {

      $getFiltro = DB::table('filtro')->where('user_id', $this->user_id)->first();

      if(empty($getFiltro)){
          $filtro = new Filtro();
          $filtro->user_id = $this->user_id;
        }else{
          $filtro = Filtro::find($getFiltro->id);
        }

        $filtro->color_id = $request->input('color');
        $filtro->save();          

      return Redirect::to('user/seleccione_referentes');
    }  



    public function setReferentes()
    {
        $referentes = Referente::all();
        return view('panels.user.filtro.referentes')->with('referentes', $referentes);
    }  


    public function postReferentes(Request $request)
    {

      $user = User::find($this->user_id);
      $ref  = $request->input('referente');
      $user->referentes()->sync($ref);
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

              $destinationPath = 'uploads/referentes/'.Auth::id();
              $extension = $file->getClientOriginalExtension();
              $espacio =  'espacio'.$i;
              $fileName  = $espacio.'.'.$extension;
              $file->move($destinationPath, $fileName);

              $getFotos = DB::table('fotosespacios_user')->where('user_id', $this->user_id)->where('espacio', $espacio)->first();
              if(empty($getFotos)){
                $feu = new FotosEspaciosUser();
                $feu->user_id = $this->user_id;
                $feu->espacio = $espacio;
              }else{
                $feu = FotosEspaciosUser::find($getFotos->id);
              }
              $feu->img = $fileName;
              $feu->save();  
              $i++;
          }

        }

        return Redirect::to('user/agendar');
        return "Ok";
              
    }    

    public function setAgendar()
    {
        return view('panels.user.filtro.agendar');
    } 

    public function postAgendar(Request $request)
    {
     //   return $request->input('fecha');

        $rules = array('fecha' => 'required');
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
          Session::flash('error', 'La fecha es requerida'); 
          return Redirect::back()->withInput()->withErrors($validator);
        }


      $getAgenda = DB::table('agendar_cita')->where('user_id', $this->user_id)->first();
      if(empty($getAgenda)){ 

        $AgendarCita = new AgendarCita();
        $AgendarCita->user_id = $this->user_id;
        $AgendarCita->fecha = $request->input('fecha');
        $AgendarCita->observaciones = $request->input('observaciones');
        $AgendarCita->save();
        return Redirect::to('user/encuesta_terminada');
      }else{
        Session::flash('error', 'La cita ya está agendada');
        return Redirect::back()->withInput();

      }       

    } 

    public function setEncuestaTerminada()
    {
        return view('panels.user.filtro.encuesta_terminada');
    }

}