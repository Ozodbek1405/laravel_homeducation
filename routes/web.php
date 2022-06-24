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
Route::post('/create_category/store/{application}',[CreateController::class,'category_store'])->name('create.category.store');
Route::get('/parent/{application}',[CreateController::class,'parent'])->name('create.parent');
Route::post('/parent/store/{application}',[CreateController::class,'parent_store'])->name('create.parent.store');
Route::get('/teacher/{application}',[CreateController::class,'teacher'])->name('create.teacher');
Route::post('/teacher/store/{application}',[CreateController::class,'teacher_store'])->name('create.teacher.store');
#endregion

#region faq
Route::get('/faq',[FaqController::class,'faq'])->name('faq');
Route::post('/question',[FaqController::class,'question'])->name('faq.question');
#endregion

#region homepage
Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/categories',[HomeController::class,'category'])->name('home.category');
Route::post('/category_store',[HomeController::class,'category_store'])->name('home.category.store');
Route::post('/create_type/{application}',[HomeController::class,'type_store'])->name('create.type.store');
Route::get('/instructions',[HomeController::class,'instruction'])->name('home.instruction');
Route::get('/about_us',[HomeController::class,'about_us'])->name('home.about_us');
#endregion


