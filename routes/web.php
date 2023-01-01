<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjeckController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\userController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrasiController;
use App\Http\Controllers\dashbordController;

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


Route::get('/',[HomeController::class,'index']);

Route::get("/about",[AboutController::class,'index']);

Route::get('/projeck',[ProjeckController::class,'index']);

Route::get('/projeck/{projeck:slug}',[ProjeckController::class,'dalamprojeck']);

Route::get('/kategori/{kategori:slug}',[KategoriController::class,'pilih']);

Route::get("/kategori",[KategoriController::class,'index']);

Route::get("/user/{user:name}",[userController::class,'userProjeck']);

Route::get("/user",[userController::class,'index']);

Route::get("/login",[loginController::class,"index"])->middleware("guest");

Route::post("/login",[loginController::class,"authenticate"]);

Route::post("/logout",[loginController::class,"logout"]);

Route::get("/registrasi",[registrasiController::class,"index"]);

Route::post("/registrasi",[registrasiController::class,"store"]);

Route::get("/dashbord" , [dashbordController::class,"index"]);


