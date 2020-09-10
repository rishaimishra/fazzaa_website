<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','mediacenter@index');
Route::get('/arabic','mediacenter@Arindex');

Route::get('/contact-query','mediacenter@saveContactForm');

Route::get('/admin','mediacenter@admin');
Route::get('/signin','mediacenter@signin');
Route::get('/panel','mediacenter@panel');
Route::get('/panel/logout','mediacenter@logout');
Route::post('/admin/login','mediacenter@login');


Route::get('/panel/add-news','mediacenter@News');
Route::get('/panel/edit-news/{id}','mediacenter@EditNews');
Route::get('/panel/manage-news','mediacenter@manageNews');
Route::get('/panel/remove-news','mediacenter@removeNews');
Route::post('/panel/edit-news','mediacenter@EditNewsSave');
Route::post('/panel/add-news','mediacenter@addNews');


Route::get('/panel/add-initiative','mediacenter@Initiative')->name('page.initiative');



Route::get('/panel/add-rewards','mediacenter@RewardAdd')->name('page.reward');



Route::get('/panel/manage-emails','mediacenter@manageEmails');
Route::get('/panel/exportmail','mediacenter@export');






Route::get('/{urls}','mediacenter@HomeD');
