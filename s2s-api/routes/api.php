<?php

use Illuminate\Http\Request;

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

Route::get('courses', 'courseController@index');
Route::get('courses/{course}', 'courseController@show');
Route::post('courses', 'courseController@store');
Route::put('courses/{course}', 'courseController@update');
Route::delete('courses/{course}', 'courseController@delete');

Route::get('students', 'studentController@index');
Route::get('students/{student}', 'studentController@show');
Route::post('students', 'studentController@store');
Route::put('students/{student}', 'studentController@update');
Route::delete('students/{student}', 'studentController@delete');

Route::get('skills', 'skillController@index');
Route::get('skills/{skill}', 'skillController@show');
Route::post('skills', 'skillController@store');
Route::put('skills/{skill}', 'skillController@update');
Route::delete('skills/{skill}', 'skillController@delete');

Route::get('levels', 'studiesLevelController@index');
Route::get('levels/{studiesLevel}', 'studiesLevelController@show');
Route::post('levels', 'studiesLevelController@store');
Route::put('levels/{studiesLevel}', 'studiesLevelController@update');
Route::delete('levels/{studiesLevel}', 'studiesLevelController@delete');

Route::get('subjects', 'subjectController@index');
Route::get('subjects/{subject}', 'subjectController@show');
Route::post('subjects', 'subjectController@store');
Route::put('subjects/{subject}', 'subjectController@update');
Route::delete('subjects/{subject}', 'subjectController@delete');


Route::get('sectors', 'sectorController@index');
Route::get('sectors/{sector}', 'sectorController@show');
Route::post('sectors', 'sectorController@store');
Route::put('sectors/{sector}', 'sectorController@update');
Route::delete('sectors/{sector}', 'sectorController@delete');


Route::get('realisations', 'realisationController@index');
Route::get('realisations/{realisation}', 'realisationController@show');
Route::post('realisations', 'realisationController@store');
Route::put('realisations/{realisation}', 'realisationController@update');
Route::delete('realisations/{realisation}', 'realisationController@delete');