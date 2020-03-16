<?php

Route::get('/', function () {

    return view('frontends.index');

});


Route::resource('testimonials','TestimonialController');
Route::resource('notice','NoticeController');
Route::resource('gallery','GalleryController');
Route::resource('/','FrontendController');
Auth::routes();

Route::get('dashboard', 'HomeController@index');
Route::get('logout', 'HomeController@logout');


// Route::get('/search-notice','NoticeController@search');
// Route::get('/search-gallery','GalleryController@search');
// Route::get('/search-testimonial','TestimonialController@search');