<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\DataController;

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
    return view('welcome');
});

//dataController routes
Route::get('/getData', [DataController::class, 'allData'])
    ->name('allData');

Route::get('/getPostsComments', [DataController::class, 'getPostsWithComments'])
    ->name('getPostsWithComments');

//MailController Routes

//Route::get('/sendMail', [MailController::class, 'sendMailOnPost'])->name('sendMailOnPost');
