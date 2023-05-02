<?php

use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* 
* Route::get             |Consultar
* Route::post            |Crear/Guardar
* Route::put             |Modificar/Actualizar
* Route::delete          |Eliminar
*/

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/home', [PageController::class,'home'])->name("home");

Route::get('/blog', [PageController::class,'blog'])->name("blog"); 

Route::get('/blog/{id}',[PageController::class,'post']
    # $post = $id===1? "PHP": "Laravel"; 
)->name("post");

Route::get('/buscar', function(Request $request){
    return $request->all();
})->name("search"); */

Route::controller(PageController::class)->group(function (){
    Route::get('/home','home')->name("home");

    Route::get('/blog','blog')->name("blog"); 

    Route::get('/blog/{id}','post'
        # $post = $id===1? "PHP": "Laravel"; 
    )->name("post");

    Route::get('/buscar', function(Request $request){
        return $request->all();
    })->name("search"); 
});