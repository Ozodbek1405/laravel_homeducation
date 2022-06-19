<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CreateController;

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/faq',[FaqController::class,'faq'])->name('faq');
Route::post('/question',[FaqController::class,'question'])->name('faq.question');
Route::get('/create',[CreateController::class,'name'])->name('create.name');



Route::get('/', function () {
    return view('homepage.home');
});
Route::get('/categories', function () {
    return view('categories.categories');
});
Route::get('/create_categories', function () {
    return view('applications.create_categories');
});
Route::get('/parents', function () {
    return view('applications.parents');
});
Route::get('/teachers', function () {
    return view('applications.teachers');
});


