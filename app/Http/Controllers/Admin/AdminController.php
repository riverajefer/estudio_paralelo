<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class AdminController extends Controller {

    public function getHome()
    {
        return view('panels.admin.home');
    }
}