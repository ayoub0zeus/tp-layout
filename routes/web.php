<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/price', [PageController::class, 'price'])->name('price');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/more', [PageController::class, 'more'])->name('more');























// Route::get('/', function () {
//     return view('home');
// })->name('home');


// Route::get('/price', function () {
//    $option = ['Cras justo odio','testing',' Morbi leo risus',' Excepteur sint occaecat velit'];
//     return view('price', ['option' =>$option]);
// })->name('price');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/service', function () {
//     return view('service');
// })->name('service');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');


// Route::get('/more',function(){
//     return view('layout1.layout');
// })->name('more');




