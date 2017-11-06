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

/*</-- contoh otomatis redirect dari '/' ke '/hallo' dengan nama routenya 'home'
{{-- 
Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('homepage',function(){
    return view ('homepage');
})->name('home');
//--/>
*/

route::get('/','PagesController@homepage');

route::get('about',function(){
    $halaman='about';
    return view ('about',compact('halaman'));
});

route::get('siswa',function(){
    $halaman='siswa';
    $siswa = ['Fauzi fadhillah','Fauzi','Gnateng'];
    return view('siswa.index',compact('halaman','siswa'));
});


