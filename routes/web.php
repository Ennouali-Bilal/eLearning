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

Route::get('/getAllCourses', 'CourController@ViewAll')->name('all');

Route::get('/getCategorie/{id?}', 'CategorieController@ofOneCategorie');

Route::get('/formateurCourses/{id?}', 'FormateurController@getCourses');

Route::get('/courseChapitre/{id?}', 'CourController@getChapitres');

Route::get('/etudiantCourses/{id?}', 'EtudiantCourController@getCourses');

Route::get('/addCours', 'CourController@addCours');

Route::post('/addCours', 'CourController@addCours');

Route::post('/addChapters', 'ChapitreController@store ');

Route::get('/choisirCours/{idEtudiant}/{idCours}', 'EtudiantCourController@followCours');
