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

Route::get('/','BooksController@getlimitbookandgetMostBoughtbook');

         





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('Book','BooksController@index');
Route::get('book/create','BooksController@create');
Route::post('book/store','BooksController@store');
Route::put('book/update/{id}','BooksController@update');
Route::delete('book/delete/{id}','BooksController@delete');
Route::get('book/edit/{id}','BooksController@edit');
Route::get('Category','CategoriesController@index');
Route::get('category/create','CategoriesController@create');
Route::post('category/store','CategoriesController@store');
Route::put('category/update/{id}','CategoriesController@update');
Route::delete('category/delete/{id}','CategoriesController@delete');
Route::get('category/edit/{id}','CategoriesController@edit');
