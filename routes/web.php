<?php

use App\Http\Controllers\pessoaController;
use App\Task;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/cadastrar', [pessoaController::class, 'store'])->name('cadastrar');
Route::get('/foo', function () {
    return view('teste-modal');
});

Route::get('/bar', function () {
    $tasks = Task::all();
    return view('tasks', [
        'tasks' => $tasks
    ]);
});