<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PostController;

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


//-----dataController routes
Route::get('/getData', [DataController::class, 'allData'])
    ->name('allData');

Route::get('/getPostsComments', [DataController::class, 'getPostsWithComments'])
    ->name('getPostsWithComments');


//------post crud operation routes
Route::get('/', [PostController::class, 'post'])
    ->name('post');

Route::post('/add_post', [PostController::class, 'savePost'])
    ->name('savePost');

Route::get('/edit_post/{post}', [PostController::class, 'editPost'])
    ->name('editPost');

Route::post('/edit_post/{post}', [PostController::class, 'updatePost'])
    ->name('updatePost');

Route::get('/delete_post/{post}', [PostController::class, 'deletePost'])
    ->name('deletePost');







//------MailController Routes

//Route::get('/sendMail', [MailController::class, 'sendMailOnPost'])->name('sendMailOnPost');
