<?php

use Illuminate\Http\Request;


//Route::resource('cubouno','cuboUnoController', ['only' => ['index']]);
Route::resource('cubodos','cuboDosController', ['only' => ['index']]);

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
