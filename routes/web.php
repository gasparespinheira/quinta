<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/',[FrontendController::class, 'index']);
Route::get('/ovos',[FrontendController::class, 'ovos'])->name('ovos');
Route::get('/galinhas',[FrontendController::class, 'galinhas'])->name('galinhas');
Route::get('/welcome',[FrontendController::class, 'welcome'])->name('welcome');
Route::get('/agendas',[FrontendController::class, 'agendas'])->name('agendas');

Route::get('agenda', 'FrontendController@agenda');
Route::post('/submitform1',[FrontendController::class, 'agendaPost'])->name('agendaPost');

