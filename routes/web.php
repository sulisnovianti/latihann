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

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/ admin/{halaman}', function($a){
	return 'Ini Halaman Status Saya'.$a;
});

Route::get('/testmodel', function(){
	$query = App\Posts::all();
	return $query;
});

Route::get('/testmodel1', function(){
	$query = App\Post1::all();
	return $query;
});

Route::get('/testsiswa', function(){
	$query = App\siswa::all();
	return $query;
});