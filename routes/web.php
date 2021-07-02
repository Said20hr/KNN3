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
Route::group([
    'middleware' =>(['auth:sanctum', 'verified','admin']),
    'prefix' => 'admin',
],
    function (){
        Route::get('/', [App\Http\Controllers\admin\homepageController::class,'index'])->name('admin');
        Route::resource('/users', App\Http\Controllers\admin\usersController::class);
        Route::resource('/packs', App\Http\Controllers\admin\packsController::class);
        Route::resource('/investissements', App\Http\Controllers\admin\investController::class);
        Route::resource('/messages', App\Http\Controllers\admin\messageController::class)->except(['create','store']);
        Route::get('/investissements/create/{id}', [App\Http\Controllers\admin\investController::class,'investCreate'])->name('user.invest');
    }
);




Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');


Route::group([
    'middleware' =>(['auth:sanctum', 'verified']),
    'prefix' => 'user',
],
    function (){
        Route::get('/dashboard', \App\Http\Livewire\Dashboard::class)->name('dashboard');
        Route::get('/investissement', \App\Http\Livewire\Investment::class)->name('investment');
        Route::get('/investissement/{investment}', App\Http\Livewire\InvestmentPage::class)->name('investment.show');
        Route::get('messages', App\Http\Livewire\Messages::class)->name('messages');
        Route::get('messages/{message}', App\Http\Livewire\MessagePage::class)->name('message.show');
        Route::get('message/send', App\Http\Livewire\MessageCreate::class)->name('message.send');
}
);









