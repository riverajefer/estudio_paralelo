<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Pedido;
class GestionPedidosController extends Controller {

    public function index()
    {
        $pedidos =  Pedido::where('completo', '1')->get();
        return view('admin.gestion_pedidos.index', compact('pedidos'));
    }
}