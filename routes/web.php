<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MenuController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Post
Route::get('/posts/index2', [PostController::class, 'index2']);
Route::resource('posts', PostController::class);

//Users
Route::get('/users/permission/{id}', [UserController::class, 'permission']);
//Route::get('/users/permission/{id}','UserController@show_post')->name('post.show');
Route::resource('users', UserController::class);


//Role
Route::get('/roles/index', [RoleController::class, 'index']);
Route::resource('roles', RoleController::class);

//Menus
Route::resource('menus', MenuController::class);

require __DIR__.'/auth.php';
