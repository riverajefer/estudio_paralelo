<?php 
namespace App\Http\Controllers\Designer;
use App\Http\Controllers\Controller;

class DesignerController extends Controller {

    public function getHome()
    {
        return view('panels.designer.home');
    }
}