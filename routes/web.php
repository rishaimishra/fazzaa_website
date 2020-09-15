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



Route::get('/panel/add-partners','PartnerController@Partners')->name('page.partner');
Route::post('/panel/add-partners','PartnerController@addPartners')->name('page.partner.add');
Route::get('/panel/manage-partners','PartnerController@managePartners')->name('manage.partner');
Route::get('/panel/remove-partners','PartnerController@removePartners');
Route::get('/panel/edit-partners/{id}','PartnerController@EditPartners');
Route::post('/panel/edit-partners','PartnerController@EditPartnerSave');



Route::get('/panel/add-images','AboutImageController@Images')->name('page.images');
Route::post('/panel/add-images','AboutImageController@addImages')->name('page.images.add');
Route::get('/panel/manage-images','AboutImageController@manageImages')->name('manage.images');
Route::get('/panel/remove-images','AboutImageController@removeImages');
Route::get('/panel/edit-images/{id}','AboutImageController@EditImages');
Route::post('/panel/edit-images','AboutImageController@EditImagesave');



Route::get('/panel/add-contact','ContactController@Contact')->name('page.contact');
Route::post('/panel/add-contact','ContactController@addContact')->name('page.contact.add');
Route::get('/panel/manage-contact','ContactController@manageContact')->name('manage.contact');
Route::get('/panel/edit-contact/{id}','ContactController@EditContact');
Route::post('/panel/edit-contact','ContactController@EditContactSave');



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
