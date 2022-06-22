<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\HomeController;
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

#region voyager
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
#endregion

#region application
Route::get('/create',[CreateController::class,'name'])->name('create.name');
Route::post('/name/store',[CreateController::class,'name_store'])->name('create.name.store');
Route::get('/create_category/{application}',[CreateController::class,'category'])->name('create.category');
Route::post('/category/store',[CreateController::class,'category_store'])->name('create.category.store');
Route::post('/types',[CreateController::class,'types'])->name('create.types');
Route::get('/parent',[CreateController::class,'parent'])->name('create.parent');
Route::post('/parent/store',[CreateController::class,'parent_store'])->name('create.parent.store');
Route::get('/teacher/{application}',[CreateController::class,'teacher'])->name('create.teacher');
Route::post('/teacher/{application}/store',[CreateController::class,'teacher_store'])->name('create.teacher.store');
#endregion

#region faq
Route::get('/faq',[FaqController::class,'faq'])->name('faq');
Route::post('/question',[FaqController::class,'question'])->name('faq.question');
#endregion

#region homepage
Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('categories',[HomeController::class,'category'])->name('home.category');
#endregion



Route::get('/parents', function () {
    return view('applications.parents');
});
Route::get('/teachers', function () {
    return view('applications.teachers');
});


