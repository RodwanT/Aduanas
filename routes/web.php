<?php

use App\Http\Controllers\AduanasController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\EnviarCorreoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SubCategoriaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PrincipalController::class, 'index'])->name("index");
Route::get('/aduanas',[AduanasController::class, 'ShowAduanas'])->name("aduanas");

Route::get('/categorias',[CategoriasController::class,'ShowCategorites'])->name("categorias");
Route::get('/categorias/{categoria}',[CategoriasController::class,'ShowCategory'])->name("category");
Route::get('/categorias/{categoria}/{subcategoria}',[SubCategoriaController::class,'ShowRequeriments'])->name("subcategory");

Route::get('/contactos',[ContactosController::class, 'ShowContactos'])->name("contactos");
Route::post('/correo',[EnviarCorreoController::class,'EnviarCorreo'])->name("enviarCorreo");

