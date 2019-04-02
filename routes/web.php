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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('news', 'NewsController');
Route::resource('products', 'ProductController');

Auth::routes();

// Route::view('/main', 'main')->middleware(['auth']);
Route::view('/map', 'map');

Route::get('/books', function () {
    return view('books');
});

// Route::get('/news', 'NewsController@index');

// // Route::get('/news/create', function () {
// //     return view('news.create');
// // });

// // Route::view('/news/{id}', 'news.show');

// Route::get('/news/{id}/edit', function () {
//     return view('news.edit');
// });

// Route::post('/news', function() {
// 	return "Запрос на создание";
// })->name('news.store');

// Route::put('/news/{id}', function($id) {
// 	return "Запрос на обновление" ;
// })->name('news.update');

// Route::delete('/news/{id}', function() {
// 	return "Запрос на удаление";
// });


// Route::prefix('/news')->name('news.')->group(function () {
// 	Route::get('/', function () {
//     	return 'Отображение всех';
// 	})->name('index');

// 	Route::get('/create', function () {
//    		return view('news.create');
// 	});
// });

// Route::middleware(['test'])->match(['get', 'post'], '/match', function() {
// 	return 'match';
// });

// // Route::any('/match', function() {
// // 	return 'any';
// // });

// // Route::redirect('/redirect', '/home');



// Route::get('/user/{name}/{password?}', function($name, $password = '111') {
// 	return $name . ' ' . $password;
// });



