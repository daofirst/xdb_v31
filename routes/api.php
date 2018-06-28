<?php

use App\User;
use Illuminate\Http\Request;
use Laravel\Passport\Passport;

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

Route::post('/login', function (Request $request) {

    Passport::actingAs(
        User::first()
    );

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
