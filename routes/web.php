<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\AtticleController;
use App\Http\Controllers\CatgoryController;
use App\Http\Controllers\fronendController;
use App\Http\Controllers\SportNewsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/index', function () {
    return view('frontend.index');
});
// frontEnd controller
Route::get('/index',[fronendController::class,'index'])->name('index');
Route::get('/lottery',[fronendController::class,'lottery'])->name('lottery');
Route::get('/kino',[fronendController::class,'kino'])->name('kino');
Route::get('/news',[fronendController::class,'news'])->name('news');
Route::get('/cacino',[fronendController::class,'cacino'])->name('cacino');
Route::get('/game',[fronendController::class,'game'])->name('game');
Route::get('/promotion',[fronendController::class,'promotion'])->name('promotion');
Route::get('/service',[fronendController::class,'service'])->name('service');
Route::get('/index/sportNews', [SportNewsController::class, 'index'])->name('sportNews');
Route::get('/index/sportNews/detail', [fronendController::class, 'detailpage'])->name('detail');
Route::get('showPost/{id}',[SportNewsController::class,'showPostView'])->name('showPostView');



// admin-controller
Auth::routes();

Route::get('/home', [App\Http\Controllers\Admincontroller::class, 'dasboard'])->name('home');
Route::prefix('admin')->middleware(['auth'])->group(function(){
    
    Route::get('/dasboard',[Admincontroller::class,'dasboard'])->name('dasboard');

    // atticle
    Route::get('/dasboard/Adminpage',[Admincontroller::class,'Adminpage'])->name('Adminpage');
    Route::get('deleteadmin/{id}',[Admincontroller::class,'deleteadmin'])->name('deleteadmin');
    
    Route::get('/dasboard/Addpost',[Admincontroller::class,'Addpost'])->name('addpost');
    Route::get('showPost/{id}',[Admincontroller::class,'showPost'])->name('showPost');
    Route::get('Editpost/{id}',[Admincontroller::class,'Editpost'])->name('Editpost');
    Route::put('updatepost/{id}',[Admincontroller::class,'updatepost'])->name('updatepost');
    Route::get('delete/{id}',[Admincontroller::class,'destroy'])->name('deletPost');
    Route::get('/dasboard/allpost',[Admincontroller::class,'allpost'])->name('allpost');
    Route::get('/search',[Admincontroller::class,'allpost'])->name('search');
    // category
    Route::get('/dasboad/category',[CatgoryController::class,'index'])->name('indexcategory');
    Route::get('/dasboad/category/create',[CatgoryController::class,'create'])->name('create');
    Route::post('/dasboad/category/post',[CatgoryController::class,'store'])->name('postCategory');
    Route::get('category/{id}',[CatgoryController::class,'destroy'])->name('deleteCategory');
    Route::get('Editcategory/{id}',[CatgoryController::class,'edit'])->name('Editcategory');
    Route::put('updateCategory/{id}',[CatgoryController::class,'update'])->name('updateCategory');




    Route::post('/upload',[CatgoryController::class,'upload'])->name('ckeditor.upload');
    Route::post('/create',[AtticleController::class,'create'])->name('postAtticle');

});
