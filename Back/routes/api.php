<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ApiController;

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

Route::group(['prefix' => '/v1'], function(){

    Route :: get('voyager', [ ApiController :: class, 'getVoys']);
    Route :: get('tips_voyager', [ ApiController :: class, 'getPits_Voys']);
    Route :: put('pits_mod_note', [ ApiController :: class, 'Modify_note_pit']);
});
