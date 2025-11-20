<?php
use App\Models\Funkopops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route:: get("/funkos", function() {return Funkopops::all(); });
