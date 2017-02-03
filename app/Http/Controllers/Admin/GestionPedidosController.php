<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\DesignerPedido;
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

        $DesignerPedido = DesignerPedido::firstOrNew(array('pedido_id'=>$request->input('pedido_id')));
        $DesignerPedido->user_id = $request->input('optDesigner');
        $DesignerPedido->pedido_id = $request->input('pedido_id');
        $DesignerPedido->save();    
       
        return response()->json([
            'optDesigner: '=>$request->input("optDesigner"),
            'pedido_id: '=>$request->input('pedido_id'),
            'DesignerPedido' =>$DesignerPedido
         ]);
    }
}