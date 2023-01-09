<?php

use App\Http\Controllers\TodoController;
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
    return view('index');
});

require __DIR__.'/auth.php';

Route::group(['prefix' => 'todo', 'middleware' => 'auth'], function() {
    Route::get('/', [TodoController ::class, 'index']);
    Route::post('/create', [TodoController::class, 'create']);
    Route::post('/update', [TodoController::class, 'update']);
    Route::post('/delete', [TodoController::class, 'delete']);
});