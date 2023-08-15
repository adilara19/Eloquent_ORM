<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


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

Route::get('create', [PagesController::class, 'create']);
Route::get('createNew', [PagesController::class, 'createNew']);
Route::get('read', [PagesController::class, 'read']);
Route::get('edit/{id}', [PagesController::class, 'edit']);
Route::get('update/{id}', [PagesController::class, 'update']);