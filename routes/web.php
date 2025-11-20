<?php


use Illuminate\Support\Facades\Route;
use App\Models\Funkopops;
use App\Models\Licenses;
use App\Models\Categorias;
use Illuminate\Http\Request;


Route::get("/funkos" , function() {
    return Funkopops::all();
});

Route::get('/tienda', function() { return view("funkos");});

Route::get('/compra', function() { return view("compra");});






/*

Route::get('/guardar_funkos', function () {
    return view("funkos");
});



Route::post('/funkos', function (Request $datos) {
    return Funkopops::create(
       [ 
        "funkos" => $datos ->input("funkos"),
       ]
    );
});




Route::post('/licensias', function (Request $datos) {
    return Licenses::create(
       [ 
        "licencias" => $datos ->input("licencias"),
       ]
    );
});


Route::get("/categorias" , function() {
    return view("categorias");
});




Route::get("/licencias" , function() {
    return view("licensias");
});*/


