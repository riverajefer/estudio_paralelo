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
    Route::get('seleccione_espacio', ['as' => 'user.seleccione_espacio','uses' => 'User\FiltroController@setEspacio']);
    Route::get('seleccione_estilo',  ['as' => 'user.seleccione_estilo','uses' => 'User\FiltroController@setEstilo']);
    Route::get('seleccione_color',   ['as' => 'user.seleccione_color','uses' => 'User\FiltroController@setColor']);
    Route::get('seleccione_referentes', ['as' => 'user.seleccione_referentes','uses' => 'User\FiltroController@setReferentes']);
    Route::get('subir_referentes', ['as' => 'user.subir_referentes','uses' => 'User\FiltroController@setReferentesUser']);

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


