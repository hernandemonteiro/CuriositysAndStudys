<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/hello_world', function () {
    return "
    <h1 style='text-align: center; padding: 2%'>
    Hello World!<br>
    with Laravel API<br>
    </h1>
    ";
});
Route::get('/print_id/{id}', function ($id) {
    return "
    <h1 style='text-align: center; padding: 2%'>
    print route:<br>
    $id
    </h1>";
});

Route::get('/json/', function () {
    return '{"nome":"Hernande Monteiro", "idade":24, "sexo": "M"}';
});
