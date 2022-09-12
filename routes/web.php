<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Models\Candidato;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [UserController::class, 'index'])->name('home.login');
Route::post('/', [UserController::class, 'login'])->name('login');
Route::post('/cadastrar-candidato', function (Request $request) {

    Candidato::create([
        'name' => $request->nome_candidato,
        'contato' => $request->telefone_candidato]);
    echo 'Candidato Criado com Sucesso!';
    dd($request->all());
});

Route::get('/mostrar-candidato/{id_do_candidato}', function ($id_do_candidato) {
//    Candidato::find($id_do_candidato);

    $candidato = Candidato::find($id_do_candidato);

    if (!$candidato) {

        echo 'Candidato não existe';
    } else {
        echo $candidato->name;
        echo "<br>";
        echo $candidato->contato;
    }
});
