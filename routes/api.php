<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontapiController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::any('test', 'App\Http\Controllers\frontapiController@testing');
Route::post('contact_form', 'App\Http\Controllers\frontapiController@save_contact_query');
Route::post('subscribe', 'App\Http\Controllers\frontapiController@subscribe_user');
Route::get('services', 'App\Http\Controllers\frontapiController@get_service');