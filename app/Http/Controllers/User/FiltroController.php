<?php 
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Espacio;
use App\Models\Estilo;
use App\Models\Color;
use App\Models\Referente;

class FiltroController extends Controller {

    public function setEspacio()
    {
    	$espacios = Espacio::all();
    	return view('panels.user.filtro.espacio')->with('espacios', $espacios);
    }

    public function setEstilo()
    {
    	$estilos = Estilo::all();
    	return view('panels.user.filtro.estilo')->with('estilos', $estilos);
    } 

    public function setColor()
    {
    	$colores = Color::all();
    	return view('panels.user.filtro.color')->with('colores', $colores);
    }  

    public function setReferentes()
    {
        $referentes = Referente::all();
        return view('panels.user.filtro.referentes')->with('referentes', $referentes);
    }  

    public function setReferentesUser()
    {
        return view('panels.user.filtro.ref_user');
    }  


}