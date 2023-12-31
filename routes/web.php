<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MensagemTesteMail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('tarefa', 'App\Http\Controllers\TarefaController');

Route::get('/mensagem-teste', function () {
    return new App\Mail\MensagemTesteMail();

    //Mail::to('cobaltcrawler@gmail.com')->send(new MensagemTesteMail());

    //return 'Mensagem enviada com sucesso!';
});
