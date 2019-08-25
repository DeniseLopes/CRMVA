<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = [
        'title' => 'Kosloski Vistos',
        'subtitle' => 'Sistema de Gerenciamento de Visto Americano'
    ];
    return view('templates.welcome', compact('data'));
});



Auth::routes();
Route::get('/login', function(){
    $data=['title'=>'Pagina de Login'];
    return view('auth.login', compact('data'));
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

/*Usuario*/
Route::group(['middleware' => 'auth'], function () {
    Route::resource('/usuario', 'UsuarioController');
    Route::put('/restore/{id}', 'UsuarioController@restore');
});
