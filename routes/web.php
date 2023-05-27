<?php

use App\Mail\testMail;
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteController;
use App\Http\Controllers\welcomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\voyageurController;

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

Route::get('/', function () {return view('welcome');});
Route::get('/about',[welcomController::class,'index']);
Route::get('/home',[welcomController::class,'index1']);
Route::get('/contact',[welcomController::class,'index2']);
Route::get('/services',[welcomController::class,'index3']);
Route::get('/login',[welcomController::class,'loginIndex']);

Route::get('/listvoy',[voyageurController::class,'index']);
Route::get('/avion',[voyageurController::class,'avion']);
Route::get('/contacts',[voyageurController::class,'contacts']);
Route::get('/reservation',[voyageurController::class,'reservation']);
Route::delete('/listvoy/{voyageur}',[voyageurController::class,'destroy']);
Route::get('/create',[voyageurController::class,'create']);
Route::get('/addavion',[voyageurController::class,'addavion']);
Route::get('/addreservation',[voyageurController::class,'addreservation']);
Route::post('/create',[voyageurController::class,'store']);
Route::post('/addavion',[voyageurController::class,'store2']);
Route::post('/addreservation',[voyageurController::class,'store3']);
Route::get('/edit/{voyageur}',[voyageurController::class,'edit']);
Route::put('/edit/{voyageur}',[voyageurController::class,'update']);
Route::post('/login3',[VoyageurController::class,'loginstore']);
Route::get('/show/{voyageur}',[voyageurController::class,'show']);

Route::get('/about1',[siteController::class,'about']);
Route::get('/laune',[siteController::class,'laune']);
Route::get('/index',[siteController::class,'index']);
Route::get('/restaurant',[siteController::class,'restaurant']);
Route::get('/restauration',[siteController::class,'repas']);
Route::get('/login1',[siteController::class,'login']);
//Route::put('/login2',[siteController::class,'signup']);
Route::post('/login2',[siteController::class,'signup']);
Route::get('/login2',[siteController::class,'signup']);
Route::get('/creation',[siteController::class,'creation']);
Route::post('/create1',[siteController::class,'store']);
Route::post('/store2',[siteController::class,'store2']);
Route::post('/emailsend',[siteController::class,'method']);
Route::post('/coffee',[siteController::class,'coffee']);
Route::post('/repas',[siteController::class,'restauration']);


Route::get('/contact',[ContactController::class,'contact']);
?>