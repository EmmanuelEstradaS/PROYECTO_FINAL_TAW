<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

|Route::get('/', function () {
    return view('welcome');
});

*/

//Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Auth\LoginController@index')->name('main');
Auth::routes();

Route::get('/registrar', 'pagesController@registrar')->name('registrar');
Route::post('/registrar', 'pagesController@registrarUser')->name('registrarUser');


Route::get('registrarProyectos','pagesController@registrarProyectos')->name('registarProyectos');
Route::post('/projects','ProjectsController@store');
Route::get('/projects/create','ProjectsController@create');
Route::get('/projects/vistaProyectos','ProjectsController@vistaProyectos');

Route::get('/projects/{id}/edit','ProjectsController@edit');
Route::post('/projects/{id}/edit','ProjectsController@update');

Route::get('/users/vistaUsuarios','UsersController@vistaUsuarios');

Route::get('/perfil/{id}/edit','PerfilController@edit');
Route::post('/perfil/{id}/edit','PerfilController@update');

//Route::get('/users/perfilFreelancer/{id}','UsersController@perfilFreelancer');

Route::get('/projects/vistaProyectosEmpresas','ProjectsController@vistaProyectosEmpresas');


Route::get('/users/{id}/info-freelancer','UsersController@informacion');


Route::post('/users/{id_usuario_sesion}/{nombre_usuario_sesion}/{id_usuario_comentario}/{nombre}/comentario','UsersController@comentario');

Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/projects/{id}/info-proyecto','ProjectsController@info_proyecto');

Route::get('/comentariosAmiEmpresa/{id}','ProjectsController@comentariosAmiEmpresa');

Route::post('/solicitud/Proyecto/{id_proyecto}/{id_empresa}','ProjectsController@solicitudProyecto');

Route::post('/solicitud/proyecto/propuesta/{id_empresa}/{id_proyecto}','ProjectsController@solicitudProyectoPropuesta');



Route::get('/propuestas/propuestas_freelancer','ProjectsController@vistaPropuestas');
Route::get('/propuestas/{id}/info-propuesta','ProjectsController@info_propuesta');




Route::post('asignarProyecto/{id}/{id_freelancer}/{id_proyecto}','ProjectsController@update_id_freelancer');

Route::post('/rechazarPropuesta/{id_propuesta}','ProjectsController@rechazarPropuesta');