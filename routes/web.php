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

$data = config('mydata');

$lunghe = [];
$corte =[];
$cortissime = [];

foreach ($data as $key => $slot) {

    $slot['id'] = $key;



    if($slot['tipo'] === 'lunga') {
        $lunghe[] = $slot;
    }
    elseif($slot['tipo'] === 'corta') {
        $corte[] = $slot;
    }
    elseif($slot['tipo'] === 'cortissima') {
        $cortissime[] = $slot;
    }

}
 return view('home', compact('lunghe', 'corte', 'cortissime'));

})->name('home');
Route::get('/news', function(){
    return view('news');

})->name('news');

Route::get('/product/{id}', function($id) {

    $data = config(' mydata');

    $product = $data[$id];
    $length = count($data) -  1 ;
    return view('product', compact('product','id','length'));
})-> name('product');