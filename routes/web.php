<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\photosController;
use App\Http\Controllers\PhotoTagsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostTagsController;
use App\Models\posts;
use App\Models\postTags;
use App\Services\Newsletter;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

Route::post('newsletter',NewsletterController::class);


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

Route::get('/', [photosController::class, 'index'])->name('home');


Route::get('/contact', function () {
    return view('design.contact');
})->name('contact');
Route::get('/about', function () {
    return "About us";
})->name('about');
Route::get('/blog',[PostsController::class ,'index'])->name('blog');

Route::get('/blog-post/{post:post_slug}',[PostsController::class,'show']);

Route::get('/postTags/{tags:slug}',[PostTagsController::class ,'index']);

Route::post('/posts/{post:post_slug}/comments',[CommentsController::class,'store']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
