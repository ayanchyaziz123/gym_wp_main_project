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

Route::resource('blogUser', \App\Http\Controllers\BlogUserController::class);

Route::get('/', function () {
    $app = app();
    $controller = $app->make('\App\Http\Controllers\BlogUserController');
    return $controller->callAction('index', $parameters = array());
})->name('welcome');


Route::resource('contacts', \App\Http\Controllers\ContactController::class);
Route::resource('adminContacts', \App\Http\Controllers\AdminContactController::class);
Route::resource('adminBlog', \App\Http\Controllers\BlogController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('tasks', \App\Http\Controllers\TasksController::class);

    Route::resource('users', \App\Http\Controllers\UsersController::class);
    Route::resource('members', \App\Http\Controllers\MembersController::class);
});
