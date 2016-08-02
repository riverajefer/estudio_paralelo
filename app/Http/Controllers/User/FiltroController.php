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
use App\Models\Referente;
use Illuminate\Http\Request;
use App\Models\Filtro;

class FiltroController extends Controller {

    public function setEspacio()
    {
    	$espacios = Espacio::all();
    	return view('panels.user.filtro.espacio')->with('espacios', $espacios);
    }

    public function postEspacio(Request $request)
    {
      $filtro = new Filtro();
      $filtro->user_id = Auth::user()->id;
      $filtro->espacio_id = $request->input('espacio');
      $filtro->save();
      return Redirect::to('user/seleccione_estilo');
      return "post espacio";
    }


    public function setEstilo()
    {
    	$estilos = Estilo::all();
    	return view('panels.user.filtro.estilo')->with('estilos', $estilos);
    } 


    public function postEstilo(Request $request)
    {
      return Redirect::to('user/seleccione_color');
    } 

    public function setColor()
    {
    	$colores = Color::all();
    	return view('panels.user.filtro.color')->with('colores', $colores);
    }  


    public function postColor(Request $request)
    {
      return Redirect::to('user/seleccione_referentes');
    }  



    public function setReferentes()
    {
        $referentes = Referente::all();
        return view('panels.user.filtro.referentes')->with('referentes', $referentes);
    }  


    public function postReferentes(Request $request)
    {
      return Redirect::to('user/subir_referente');
    } 



    public function setReferentesUser()
    {
        return view('panels.user.filtro.ref_user');
    }  

    public function postReferentesUser(Request $request)
    {

      if (!$request->hasFile('image')) {
         return Redirect::to('user/tienes_plano');
      }
      //var_dump(Input::file('image'));
        /*if(empty(Input::file('image'))){
        }*/

        $file  = array('image' => Input::file('image'));
        $rules = array('image' => 'mimes:jpeg,jpg,bmp,png,gif|max:6000'); 
        $validator = Validator::make($file, $rules);

        if ($validator->fails()) {
           Session::flash('error', 'Fallo: el archivo subido no es válido');
           return Redirect::back()->withInput()->withErrors($validator);
        }        

        if (Input::file('image')->isValid()) {
          $destinationPath = 'uploads/'.Auth::id(); 
          $extension = Input::file('image')->getClientOriginalExtension();
          $fileName  = 'referente.'.$extension;
          Input::file('image')->move($destinationPath, $fileName); 
          Session::flash('success', 'Upload successfully'); 
          // guardar el registro en la BD
          return Redirect::to('user/tienes_plano');
        }
        else {
          Session::flash('error', 'Error: el archivo subido no es válido');
          return Redirect::back();
        }
    } 

    public function setTienesPlano()
    {
        return view('panels.user.filtro.tiene_plano');
    } 

    public function setSubirPlano()
    {
        return view('panels.user.filtro.subir_plano');
    } 


    public function postSubirPlano()
    {

        $file  = array('plano' => Input::file('plano'));
        $rules = array('plano' => 'required|mimes:jpeg,jpg,bmp,png,gif|max:6000'); 
        $validator = Validator::make($file, $rules);

        if ($validator->fails()) {
           return Redirect::back()->withInput()->withErrors($validator);
        }        

        if (Input::file('plano')->isValid()) {
          $destinationPath = 'uploads/'.Auth::id(); 
          $extension = Input::file('plano')->getClientOriginalExtension();
          $fileName  = 'plano.'.$extension;
          Input::file('plano')->move($destinationPath, $fileName); 
          Session::flash('success', 'Upload successfully'); 
          // guardar el registro en la BD
          return Redirect::to('user/deseas_subir_espacios');
          return "Ok";
        }
        else {
          Session::flash('error', 'Error: el archivo subido no es válido');
          return Redirect::back();
        }

    }         

    public function setDeseasSubirEspacios()
    {
        return view('panels.user.filtro.deseas_subir_espacios');
    }

    public function setSubirEspacios()
    {
        return view('panels.user.filtro.subir_espacios');
    } 

    public function postSubirEspacios()
    {

        $espacio1  = array('espacio1' => Input::file('espacio1'));
        $rules = array('espacio1' => 'required|mimes:jpeg,jpg,bmp,png,gif|max:6000'); 
        $validator = Validator::make($espacio1, $rules);

        if ($validator->fails()) {
           return Redirect::back()->withInput()->withErrors($validator);
        }        

        if (Input::file('espacio1')->isValid()) {
          $destinationPath = 'uploads/'.Auth::id(); 
          $extension = Input::file('espacio1')->getClientOriginalExtension();
          $fileName  = 'espacio1.'.$extension;
          Input::file('espacio1')->move($destinationPath, $fileName); 
          Session::flash('success', 'Upload successfully'); 
          // guardar el registro en la BD
          //return Redirect::to('user/subir_espacios');
        }
        else {
          Session::flash('error', 'Error: el archivo subido no es válido');
          return Redirect::back();
        }

        if(!empty(Input::file('espacio2'))){

            $espacio2  = array('espacio2' => Input::file('espacio2'));
            $rules = array('espacio2' => 'required|mimes:jpeg,jpg,bmp,png,gif|max:6000'); 
            $validator = Validator::make($espacio2, $rules);

            if ($validator->fails()) {
               return Redirect::back()->withInput()->withErrors($validator);
            }        

            if (Input::file('espacio2')->isValid()) {
              $destinationPath = 'uploads/'.Auth::id(); 
              $extension = Input::file('espacio2')->getClientOriginalExtension();
              $fileName  = 'espacio2.'.$extension;
              Input::file('espacio2')->move($destinationPath, $fileName); 
              Session::flash('success', 'Upload successfully'); 
              // guardar el registro en la BD
              //return Redirect::to('user/subir_espacios');
            }
            else {
              Session::flash('error', 'Error: el archivo subido no es válido');
              return Redirect::back();
            }
        }

        if(!empty(Input::file('espacio3'))){

            $espacio3  = array('espacio3' => Input::file('espacio3'));
            $rules = array('espacio3' => 'required|mimes:jpeg,jpg,bmp,png,gif|max:6000'); 
            $validator = Validator::make($espacio3, $rules);

            if ($validator->fails()) {
               return Redirect::back()->withInput()->withErrors($validator);
            }        

            if (Input::file('espacio3')->isValid()) {
              $destinationPath = 'uploads/'.Auth::id(); 
              $extension = Input::file('espacio3')->getClientOriginalExtension();
              $fileName  = 'espacio3.'.$extension;
              Input::file('espacio3')->move($destinationPath, $fileName); 
              Session::flash('success', 'Upload successfully'); 
              // guardar el registro en la BD
              //return Redirect::to('user/subir_espacios');
            }
            else {
              Session::flash('error', 'Error: el archivo subido no es válido');
              return Redirect::back();
            }
        }

        if(!empty(Input::file('espacio4'))){

            $espacio4  = array('espacio4' => Input::file('espacio4'));
            $rules = array('espacio4' => 'required|mimes:jpeg,jpg,bmp,png,gif|max:6000'); 
            $validator = Validator::make($espacio4, $rules);

            if ($validator->fails()) {
               return Redirect::back()->withInput()->withErrors($validator);
            }        

            if (Input::file('espacio4')->isValid()) {
              $destinationPath = 'uploads/'.Auth::id(); 
              $extension = Input::file('espacio4')->getClientOriginalExtension();
              $fileName  = 'espacio4.'.$extension;
              Input::file('espacio4')->move($destinationPath, $fileName); 
              Session::flash('success', 'Upload successfully'); 
              // guardar el registro en la BD
              //return Redirect::to('user/subir_espacios');
            }
            else {
              Session::flash('error', 'Error: el archivo subido no es válido');
              return Redirect::back();
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
        return Redirect::to('user/encuesta_terminada');
        return $name = $request->input('fecha');
        return "Post agendar";
    } 


    public function setEncuestaTerminada()
    {
        return view('panels.user.filtro.encuesta_terminada');
    }



}