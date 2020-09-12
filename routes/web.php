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


Route::get('/panel/add-news','mediacenter@News')->name('panel.add.news');
Route::get('/panel/edit-news/{id}','mediacenter@EditNews');
Route::get('/panel/manage-news','mediacenter@manageNews');
Route::get('/panel/remove-news','mediacenter@removeNews');
Route::post('/panel/edit-news','mediacenter@EditNewsSave');
Route::post('/panel/add-news','mediacenter@addNews');





Route::get('/panel/add-rewards','mediacenter@Rewards')->name('page.reward');
Route::post('/panel/add-rewards','mediacenter@addRewards')->name('page.rewardadd');
Route::get('/panel/manage-rewards','mediacenter@manageRewards')->name('manage.reward');
Route::get('/panel/remove-rewards','mediacenter@removeRewards');
Route::get('/panel/edit-rewards/{id}','mediacenter@EditRewards');
Route::post('/panel/edit-rewards','mediacenter@EditRewardsSave');


Route::get('/panel/add-faqs','mediacenter@Faqs')->name('page.faq');
Route::post('/panel/add-faqs','mediacenter@addFaqs')->name('page.faqadd');
Route::get('/panel/manage-faqs','mediacenter@manageFaqs')->name('manage.faq');
Route::get('/panel/remove-faqs','mediacenter@removeFaqs');
Route::get('/panel/edit-faqs/{id}','mediacenter@EditFaqs');
Route::post('/panel/edit-faqs','mediacenter@EditFaqsSave');



Route::resource('/panel','InitiativeController');
Route::post('/panel/edit-initiatives','InitiativeController@EditInitiativesSave');
Route::get('remove-initiatives/{id}','InitiativeController@destroy');



Route::get('panel/about/read','AboutController@indexing')->name('page.about.read');
Route::resource('/panel/about','AboutController');
Route::post('/panel/edit-about','AboutController@EditAboutSave');
Route::get('remove-about/{id}','AboutController@destroy');





Route::get('/panel/manage-emails','mediacenter@manageEmails');
Route::get('/panel/exportmail','mediacenter@export');






Route::get('/{urls}','mediacenter@HomeD');
