<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvanceController;

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

Route::get('/register',[AdvanceController::class,'register']); 
Route::post('/register',[AdvanceController::class,'createUser']); 

Route::get('/thanks',[AdvanceController::class,'thanks']); 


Route::get('/login', [AdvanceController::class,'check']);
Route::post('/login', [AdvanceController::class,'checkUser']);

Route::get('/mypage',[AdvanceController::class,'mypage']); 

Route::get('/',[AdvanceController::class,'index']); 

Route::get('/search',[AdvanceController::class,'search']);

Route::post('/favorite',[AdvanceController::class,'favorite']);

Route::get('/detail/{id}',[AdvanceController::class,'detail']);

Route::post('/reserve',[AdvanceController::class,'createReserve']);

Route::get('/logout',[AdvanceController::class,'logout']);

