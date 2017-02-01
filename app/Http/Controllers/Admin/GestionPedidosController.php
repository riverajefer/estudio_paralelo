<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\DesignerUser;
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

        $DesignerUser = DesignerUser::firstOrNew(array('user_id'=>$request->input('user_id'), 'designer_id'=>$request->input('optDesigner')));
        $DesignerUser->user_id = $request->input('user_id');
        $DesignerUser->designer_id = $request->input('optDesigner');
        $DesignerUser->save();       
/*

$user = User::firstOrNew(array('name' => 'user_id'=>$request->input('user_id'), 'designer_id'=>$request->input('optDesigner')));
$user->foo = Input::get('foo');
$user->save();

       $NewdesignerUser = new DesignerUser();
       $NewdesignerUser->user_id = $request->input('user_id');
       $NewdesignerUser->designer_id = $request->input('optDesigner');
       $NewdesignerUser->save();
*/
       
       
        return response()->json([
            'user_id: '=>$request->input('user_id'),
            'optDesigner: '=>$request->input("optDesigner"),
            'NewdesignerUser' =>$DesignerUser
         ]);
    }
}