<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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
    return view('landing.index');
});

Route::group(['prefix' => '/registro'], function () {

    Route::get('/', [FormController::class, 'index'])->name("registro");
    //obtener la info del recurso solicitado
    Route::get('/{resource}', [FormController::class, 'index']);
    //Debe retornar una vista
    Route::get('/create', [FormController::class, 'create']);
    Route::get('/{resource}/edit', [FormController::class, 'edit']);

    Route::post('/', [FormController::class, 'store'])->name("saveData");
    Route::put('/{resource}', [FormController::class, 'update']);
    Route::delete('/{resource}', [FormController::class, 'delete']);
});
