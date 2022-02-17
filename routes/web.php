<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
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

//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'my-first-post' => 'Hello, this is my first blog post!',
//        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
//    ];
//
//    if (!array_key_exists($post, $posts)) {
//        //abort(404, 'Sorry, that post was not found.');
//    }
//
//    return view('post', [
//        'post' => $posts[$post]
//    ]);
//});

//Route::get('/', function () {
    //return view('welcome');
 //});


Route::get('/blog/create', [BlogController::class, 'create']);
Route::post('/blog', [BlogController::class, 'store']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show']);
Route::get('/blog/{id}/edit', [BlogController::class, 'edit']);
Route::put('/blog/{id}', [BlogController::class, 'update']);
Route::delete('/blog/{id}', [BlogController::class, 'destroy']);



Route::get('/', [WelcomeController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/faq/create', [FaqController::class, 'create']);
Route::post('/faq', [FaqController::class, 'store']);
Route::get('/faq', [FaqController::class, 'index']);
Route::get('/faq/{question}', [FaqController::class, 'show']);
Route::get('/faq/{question}/edit', [FaqController::class, 'edit']);
Route::put('/faq/{question}', [FaqController::class, 'update']);
Route::delete('/faq/{question}', [FaqController::class, 'destroy']);



Route::get('/profile', [ProfileController::class, 'show']);
