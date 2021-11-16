<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    return view('auth.login');
});

//ruta prueba registro user
Route::get('/users/crear', [App\Http\Controllers\UserController::class, 'crear']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create']);

Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');

//Rutas tabla rol
Route::get('/rol/create', [App\Http\Controllers\RolController::class, 'create'])->name('rol.create');
Route::post('/rol', [App\Http\Controllers\RolController::class, 'store'])->name('rol.store');
Route::get('/rol', [App\Http\Controllers\RolController::class, 'index'])->name('rols.index');
Route::get('/rol/{rol}', [App\Http\Controllers\RolController::class, 'show'])->name('rols.show');
Route::get('/rol/{rol}/edit', [App\Http\Controllers\RolController::class, 'edit'])->name('rols.edit');
Route::put('/rol/{rol}', [App\Http\Controllers\RolController::class, 'update'])->name('rol.update');


//Rutas tabla usuario
Route::get('/usuario/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('usuario.create');
Route::post('/usuario', [App\Http\Controllers\UsuarioController::class, 'store'])->name('usuario.store');
Route::get('/usuario', [App\Http\Controllers\UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuario/{usuario}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('usuarios.show');

//Rutas tabla modalidad
Route::get('/modalidad/create', [App\Http\Controllers\ModalidadController::class, 'create'])->name('modalidad.create');
Route::post('/modalidad', [App\Http\Controllers\ModalidadController::class, 'store'])->name('modalidad.store');
Route::get('/modalidad', [App\Http\Controllers\ModalidadController::class, 'index'])->name('modalidades.index');
Route::get('/modalidad/{modalidad}', [App\Http\Controllers\ModalidadController::class, 'show'])->name('modalidades.show');

//Rutas tabla tipo_docente
Route::get('/tipo_docente/create', [App\Http\Controllers\Tipo_DocenteController::class, 'create'])->name('tipo_docente.create');
Route::post('/tipo_docente', [App\Http\Controllers\Tipo_DocenteController::class, 'store'])->name('tipo_docente.store');
Route::get('/tipo_docente', [App\Http\Controllers\Tipo_DocenteController::class, 'index'])->name('tipo_docentes.index');
Route::get('/tipo_docente/{tipo_docente}', [App\Http\Controllers\Tipo_DocenteController::class, 'show'])->name('tipo_docentes.show');
Route::get('/tipo_docente/{tipo_docente}/edit', [App\Http\Controllers\Tipo_DocenteController::class, 'edit'])->name('tipo_docentes.edit');
Route::put('/tipo_docente/{tipo_docente}', [App\Http\Controllers\Tipo_DocenteController::class, 'update'])->name('tipo_docente.update');

//Rutas tabla docente
Route::get('/docente/create', [App\Http\Controllers\DocenteController::class, 'create'])->name('docente.create');
Route::post('/docente', [App\Http\Controllers\DocenteController::class, 'store'])->name('docente.store');
Route::get('/docente', [App\Http\Controllers\DocenteController::class, 'index'])->name('docentes.index');
Route::get('/docente/{docente}', [App\Http\Controllers\DocenteController::class, 'show'])->name('docentes.show');

//Rutas tabla postulante
Route::get('/postulante/create', [App\Http\Controllers\PostulanteController::class, 'create'])->name('postulante.create');
Route::post('/postulante', [App\Http\Controllers\PostulanteController::class, 'store'])->name('postulante.store');
Route::get('/postulante', [App\Http\Controllers\PostulanteController::class, 'index'])->name('postulantes.index');
Route::get('/postulante/{postulante}', [App\Http\Controllers\PostulanteController::class, 'show'])->name('postulantes.show');

//Rutas tabla estado_tema
Route::get('/estado_tema/create', [App\Http\Controllers\Estado_TemaController::class, 'create'])->name('estado_tema.create');
Route::post('/estado_tema', [App\Http\Controllers\Estado_TemaController::class, 'store'])->name('estado_tema.store');
Route::get('/estado_tema', [App\Http\Controllers\Estado_TemaController::class, 'index'])->name('estado_temas.index');
Route::get('/estado_tema/{estado_tema}', [App\Http\Controllers\Estado_TemaController::class, 'show'])->name('estado_temas.show');

//Rutas tabla tema
Route::get('/tema/create', [App\Http\Controllers\TemaController::class, 'create'])->name('tema.create');
Route::post('/tema', [App\Http\Controllers\TemaController::class, 'store'])->name('tema.store');
Route::get('/tema', [App\Http\Controllers\TemaController::class, 'index'])->name('temas.index');
Route::get('/tema/{tema}', [App\Http\Controllers\TemaController::class, 'show'])->name('temas.show');

//Rutas tabla tecnica_coaching
Route::get('/tecnica_coaching/create', [App\Http\Controllers\Tecnica_CoachingController::class, 'create'])->name('tecnica_coaching.create');
Route::post('/tecnica_coaching', [App\Http\Controllers\Tecnica_CoachingController::class, 'store'])->name('tecnica_coaching.store');
Route::get('/tecnica_coaching', [App\Http\Controllers\Tecnica_CoachingController::class, 'index'])->name('tecnicas_coaching.index');
Route::get('/tecnica_coaching/{tecnica_coaching}', [App\Http\Controllers\Tecnica_CoachingController::class, 'show'])->name('tecnicas_coaching.show');

//Rutas tabla notificacion
Route::get('/notificacion/create', [App\Http\Controllers\NotificacionController::class, 'create'])->name('notificacion.create');
Route::post('/notificacion', [App\Http\Controllers\NotificacionController::class, 'store'])->name('notificacion.store');
Route::get('/notificacion', [App\Http\Controllers\NotificacionController::class, 'index'])->name('notificaciones.index');
Route::get('/notificacion/{notificacion}', [App\Http\Controllers\NotificacionController::class, 'show'])->name('notificaciones.show');

//Rutas tabla acta_perfil
Route::get('/acta_perfil/create', [App\Http\Controllers\Acta_PerfilController::class, 'create'])->name('acta_perfil.create');
Route::post('/acta_perfil', [App\Http\Controllers\Acta_PerfilController::class, 'store'])->name('acta_perfil.store');
Route::get('/acta_perfil', [App\Http\Controllers\Acta_PerfilController::class, 'index'])->name('acta_perfiles.index');
Route::get('/acta_perfil/{acta_perfil}', [App\Http\Controllers\Acta_PerfilController::class, 'show'])->name('acta_perfiles.show');


Route::get('send-mail', function () {
   
    $data = [
        'titulo' => 'SISETT - 2021 :)))',
        'body' => 'Cuerpo del mensaje pruebaaaaaa......'
    ];
   
    Mail::to('victoria123123lora@gmail.com')->send(new \App\Mail\EnviarCorreo($data));
    echo "Enviado......";
});