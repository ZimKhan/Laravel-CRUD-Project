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

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/about_us','HelloController@about')->name('about');
Route::get('/contact_us','HelloController@contact')->name('contact');

// Category Cruf

Route::get('/add_category','BoloController@Add_Category')->name('add.category');
Route::get('/all_category','BoloController@All_Category')->name('all.category');
Route::post('/store_category','BoloController@Store_Category')->name('store.category');
Route::get('view/category/{id}','BoloController@View_Category');
Route::get('delete/category/{id}','BoloController@Delete_Category');
Route::get('edit/category/{id}','BoloController@Edit_Category');
Route::post('update/category/{id}','BoloController@Update_Category');

// Post Crud

Route::get('/write_post','PostController@Write_Post')->name('write.post');
Route::post('/store.post','PostController@Store_Post')->name('store.post');
