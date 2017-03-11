<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api', function(){
    sleep(2);
    return response()->json([
        [
            'name' => 'Adrian',
            'age' => '21'
        ],
        [
            'name' => 'Kim',
            'age' => '30'
        ]
    ]);
});
