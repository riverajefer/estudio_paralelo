<?php

Route::get('/', ['as' => 'public.home',   'uses' => 'PagesController@getHome']);


/*
|--------------------------------------------------------------------------
| REGISTRO Y AUTENTICACIÓN
|--------------------------------------------------------------------------
*/

Route::get('/login',     ['as' => 'auth.login',            'uses'=>'Auth\AuthController@getLogin']);
Route::post('/login',    ['as' => 'auth.login-post',       'uses'=>'Auth\AuthController@postLogin']);
Route::get('/register',  ['as' => 'auth.register',         'uses'=>'Auth\AuthController@getRegister']);
Route::post('/register', ['as' => 'auth.register-post',    'uses'=>'Auth\AuthController@postRegister']);
Route::get('/password',  ['as' => 'auth.password',         'uses'=>'Auth\PasswordResetController@getPasswordReset']);
Route::post('/password', ['as' => 'auth.password-post',    'uses'=>'Auth\PasswordResetController@postPasswordReset']);
Route::get('/password/{token}', ['as' => 'auth.reset',     'uses'=>'Auth\PasswordResetController@getPasswordResetForm']);
Route::post('/password/{token}',['as' => 'auth.reset-post','uses'=>'Auth\PasswordResetController@postPasswordResetForm']);

Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'Auth\AuthController@getSocialRedirect']);
Route::get('/social/handle/{provider}',   ['as' => 'social.handle',   'uses' => 'Auth\AuthController@getSocialHandle']);


/*
|--------------------------------------------------------------------------
| USUARIO REGISTRADO
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'user', 'middleware' => 'auth:user'], function()
{
    Route::get('/', ['as' =>'user.home', 'uses' => 'UserController@getHome']);
    Route::get('seleccione_espacio', ['as' => 'user.seleccione_espacio','uses' => 'User\PedidoController@setEspacio']);
    Route::post('seleccione_espacio', ['as' => 'user.seleccione_espacio','uses' => 'User\PedidoController@postEspacio']);

    Route::get('seleccione_estilo',  ['as' => 'user.seleccione_estilo','uses' => 'User\PedidoController@setEstilo']);
    Route::post('seleccione_estilo',  ['as' => 'user.seleccione_estilo','uses' => 'User\PedidoController@postEstilo']);

    Route::get('seleccione_color',   ['as' => 'user.seleccione_color','uses' => 'User\PedidoController@setColor']);
    Route::post('seleccione_color',   ['as' => 'user.seleccione_color','uses' => 'User\PedidoController@postColor']);

    Route::get('seleccione_referentes', ['as' => 'user.seleccione_referentes','uses' => 'User\PedidoController@setReferentes']);
    Route::post('seleccione_referentes', ['as' => 'user.seleccione_referentes','uses' => 'User\PedidoController@postReferentes']);

    Route::get('subir_referente', ['as' => 'user.subir_referente','uses' => 'User\PedidoController@setReferentesUser']);
    Route::post('subir_referente', ['as' => 'user.post_subir_referente','uses' => 'User\PedidoController@postReferentesUser']);

    Route::get('subir_espacios', ['as' => 'user.subir_espacios','uses' => 'User\PedidoController@setSubirEspacios']);
    Route::post('subir_espacios', ['as' => 'user.post_subir_espacios','uses' => 'User\PedidoController@postSubirEspacios']);

    Route::get('agendar', ['as' => 'user.agendar','uses' => 'User\PedidoController@setAgendar']);
    Route::post('agendar', ['as' => 'user.post_agendar','uses' => 'User\PedidoController@postAgendar']);

    Route::get('resumen', ['as' => 'user.resumen','uses' => 'User\PedidoController@setResumen']);
    Route::post('resumen', ['as' => 'user.post_resumen','uses' => 'User\PedidoController@postResumen']);

    Route::get('pedidos', ['as' => 'user.pedidos','uses' => 'User\PedidoController@index']);
    Route::get('pedidos/{id}', ['as' => 'user.pedidos.id','uses' => 'User\PedidoController@show']);

    Route::get('nuevo_pedido', ['as' => 'user.nuevo_pedido','uses' => 'User\PedidoController@nuevoPedido']);


});


/*
|--------------------------------------------------------------------------
| ADMINISTRADOR
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:administrator'], function()
{
    Route::get('/', ['as' => 'admin.home', 'uses' => 'Admin\AdminController@getHome']);
    Route::resource('estilos', 'Admin\EstiloController');
    Route::resource('espacios', 'Admin\EspacioController');
    Route::resource('colors', 'Admin\ColorController');
    Route::resource('paquetes', 'Admin\PaqueteController');

    Route::get('gestion_pedidos', ['uses' => 'Admin\GestionPedidosController@index']);
    Route::get('pedidos/{id}', ['as' => 'user.pedidos.id','uses' => 'User\PedidoController@show']);

    Route::get('lista_designers', function(){

        $lista_designers = [];
        $RolUser = App\Models\RoleUser::Where('role_id', 3)->get();

        foreach ($RolUser as $Ruser) {
            $lista_designers[] = $Ruser->users;
        }
        return $lista_designers;


    });

});


/*
|--------------------------------------------------------------------------
| DESIGNER (DISEÑADOR)
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'designer', 'middleware' => 'auth:designer'], function()
{
    Route::get('/', ['as' => 'designer.home', 'uses' => 'Designer\DesignerController@getHome']);
});



Route::get('test', function(){

    return "test";
});




Route::group(['middleware' => 'auth:all'], function()
{
    Route::get('/logout', ['as' => 'authenticated.logout', 'uses' => 'Auth\AuthController@getLogout']);
});


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});


Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


