<?php
use App\Http\Controllers\canvasController;
use App\Http\Controllers\contactanosController;
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

Route::get('contactanos' , [contactanosController::class, 'index'])->name(('contactanos.index'));
Route::post('contactanos' , [contactanosController::class, 'store'])->name(('contactanos.store'));
Route::resource('canvas', canvasController::class);