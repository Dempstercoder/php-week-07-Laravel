<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;

Route::get('/owners', [OwnerController::class, 'index']);

/*
Route::get('/', [Home::class, 'index']);
Route::get('/owners/create', [OwnerController::class, 'index']);
*/


Route::group(['prefix' => 'owners'], function () {
    // add *above* route with URL parameter
    // otherwise 'create' will get included in that
    Route::get('create', [OwnerController::class, 'create']);//owner/create
    Route::post('create', [OwnerController::class, 'createPost']);
    Route::get('{owner}', [OwnerController::class, 'show']);//owner/id  
    //first 'create' is the url, second 'create' is part of ownercontroller.
});

/* http://192.168.10.10/owners to show in browser the owners
http://192.168.10.10/owners/create to show in browser the form to create an owner */
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


