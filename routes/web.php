<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;

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

Route::get('/', [TodolistController::class, 'index']);
Route::post('/saveItem', [TodolistController::class, 'saveItem'])->name('saveItem');
/*also specificies controller and method
this is how it knows where the route is by name

*/
Route::post('/markComplete/{id}', [TodolistController::class, 'markComplete'])->name('markComplete');
Route::post('/deleteItem/{id}', [TodolistController::class, 'deleteItem'])->name('deleteItem');