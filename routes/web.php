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

Route::get('artur', function () {
    return view('artur');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('news', 'NewsController');
Route::resource('products', 'ProductController');
Route::get('MSV', function() {
    return view('msv');
});

Auth::routes();

// Route::view('/main', 'main')->middleware(['auth']);
Route::view('/map', 'map');

<<<<<<< HEAD
Route::view('/yakubov', 'yakubov');
=======
Route::get('/books', function () {
    return view('books');
});
>>>>>>> c96db2f2949d7812cb0b0113faf483d303257ff6

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

Route::get('/grebenyuk', function(){
    return view('grebenyuk');
});

