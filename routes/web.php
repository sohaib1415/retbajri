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
Route::get('/', 'HomeController@welcome')->name('welcome');
/*Route::get('/', function () {
    return view('welcome', ['name' => 'welcome']);
});
*/
Route::get('/about-us', function () {
    return view('pages/about-us');
});

Route::get('/faqs', function () {
    return view('pages/faqs');
});

Route::get('/privacy-policies', function () {
    return view('pages/privacy-policies');
});

Route::get('/terms-of-use', function () {
    return view('pages/terms-of-use');
});


Route::get('/blogs', function () {
    return view('pages/blogs');
});

Route::get('/blog-post/{id}', 'PageController@blogpost')->name('blog-post');
Route::get('/blog-post', function () {
    return view('pages/blog-post');
});
Route::get('/contact-us', function () {
    return view('pages/contact-us');
});

Route::get('/how-to-purchase', function () {
    return view('pages/how-to-purchase');
});

Route::get('/cement-buying-and-execution', function () {
    return view('pages/cement-buying-and-execution');
});

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/my-profile', 'HomeController@profile')->name('user.profile');
Route::get('/my-ads', 'HomeController@ads')->name('user.ads');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/ads', 'AdsubmissionController');

Route::get('/product-detail', function () {
    return view('pages/product-detail');
})->name('product-detail');
