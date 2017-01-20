<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Http\Requests;
use Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class GestionPedidosController extends Controller {

    public function index()
    {
        $pedidos =  Pedido::where('completo', '1')->paginate(20);
        return view('admin.gestion_pedidos.index', compact('pedidos'));
    }

    public function asignar(Request $request){
        return response()->json([
                'name' => 'Abigail',
                'state' => 'CA'
            ]);
    }
}