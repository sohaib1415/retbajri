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
use Illuminate\Http\Request;
use App\Mail\ContactMail;

Route::get('/',     'HomeController@welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about-us', function () {
    return view('pages.about-us');
});

Route::get('/faqs', function () {
    return view('pages.faqs');
});

Route::get('/privacy-policies', function () {
    return view('pages.privacy-policies');
});

Route::get('/terms-of-use', function () {
    return view('pages.terms-of-use');
});


Route::get('/blogs', function () {
    return view('pages.blogs');
});

Route::get('/blog-post', function () {
    return view('pages.blog-post');
});
Route::get('/contact-us', function () {
    return view('pages.contact-us');
});
Route::post('/contact-us', function (Request $request) {
    Mail::send(new ContactMail($request));
    session()->flash('message', 'Thank you for contacting us!');
    return view('pages.contact-us');
});


Route::get('/how-to-purchase', function () {
    return view('pages.how-to-purchase');
});

Route::get('/cement-buying-and-execution', function () {
    return view('pages.cement-buying-and-execution');
});

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/my-profile', 'UserController@profile')->name('my.profile');
Route::get('/user-profile/{id}', 'UserController@userProfile')->name('user.profile');
Route::get('/edit-profile/{id}', 'UserController@profileEdit')->name('user.profile.edit');
Route::post('/edit-profile', 'UserController@profileUpdate')->name('user.profile.update');
Route::get('/my-ads', 'UserController@ads')->name('user.ads');



Route::resource('/ads', 'AdsubmissionController');
Route::get('/search', 'BusinessMeansController@search')->name('search.page');
Route::get('/businessmeans', 'BusinessMeansController@index')->name('businessmeans.index');

Route::get('/product-detail/{id}', 'BusinessMeansController@detail')->name('product-detail');
// Route::get('/product-detail', function () {
//     return view('pages.product-detail');
// })->name('product-detail');
