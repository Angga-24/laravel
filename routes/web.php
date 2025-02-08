<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\localcontroller;
use App\Http\Controllers\siswacontroller;
use App\Http\Controllers\latihancontroller;

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
})->name('welcome');

Route::get('/home',function(){
    $mantan=array('www','Prices Leonor','Tokyo','MeiMei','rrrr');
    return view('home',[
    "nama"=>"Angga",
    "kelas"=>"XI RPL 1",
    "alamat"=>"Bundar",
    "mantan"=>$mantan,
    'menu'=>'home'
    ]);
})->name('home');

Route::get('/latihan',
[latihancontroller::class,
'index'])->name('latihan');

Route::get('/biodata',
[latihancontroller::class,
'biodata'])->name('biodata');


Route::get('/sbadmin',function(){
    return view('index',[
        'menu'=>'dashboard'
    ]);
})->name('sbadmin');

Route::get('/lokal',[localcontroller::class,'index'])->name('lokal.index');

Route::get('/tambah',[localcontroller::class,'create'])->name('lokal.create');

Route::post('/lokal',[localcontroller::class,'store'])->name('lokal.store');

Route::get('/lokal/edit/{id}',[localcontroller::class,'edit'])->name('lokal.edit');

Route::put('/lokal/update',[localcontroller::class,'update'])->name('lokal.update');

Route::delete('/lokal/delete/{id}',[localcontroller::class,'destroy'])->name('lokal.hapus');

Route::resource('siswa',siswacontroller::class);