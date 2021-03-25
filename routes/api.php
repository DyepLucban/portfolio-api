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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', 'TestController@index');

// Skills
Route::group(['prefix' => 'skills'], function() {
    Route::get('/', 'SkillController@index');
    Route::get('/{id}', 'SkillController@browseSkillById');
    Route::post('/create', 'SkillController@createSkill');
    Route::put('/update/{id}', 'SkillController@updateSkill');
    Route::delete('/delete/{id}', 'SkillController@deleteSkill');
});

// Projects
Route::group(['prefix' => 'projects'], function() {
    Route::get('/', 'ProjectController@index');
});
