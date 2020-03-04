<?php

Route::get('/', function () {

    return view('welcome');

});

Route::get('/test', function () {

    return view('test');

});


Route::resource('testimonials','TestimonialController');
Route::resource('notice','NoticeController');
Route::resource('gallery','GalleryController');
Route::resource('website','WebController');
Auth::routes();

Route::get('dashboard', 'HomeController@index');
Route::get('logout', 'HomeController@logout');


// Route::get('/search-notice','NoticeController@search');
// Route::get('/search-gallery','GalleryController@search');
// Route::get('/search-testimonial','TestimonialController@search');


Route::post('/testimonials/load_data', 'TestimonialController@load_data')->name('testimonial.load_data');
