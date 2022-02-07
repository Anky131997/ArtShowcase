<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TattooController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserViewController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\UploadController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/demo', function(){
        return view('demo');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/upload', [UploadController::class, 'upload'])->name('upload');

Route::post('/upload', [UploadController::class, 'store']);

Route::get('/profile', [UserViewController::class, 'profile'])->name('profile');

Route::get('/artist/{id}', [UserViewController::class, 'artistProfile'])->name('artistProfile');

Route::get('tattoos/{tattoo}',[TattooController::class, 'show'])->name('tattoo');

Route::get('types/{type}',[TypeController::class, 'show'])->name('artbytype');

Route::get('contact',[UserViewController::class, 'contact'])->name('contact');

Route::get('artists',[UserViewController::class, 'artists'])->name('artists');

Route::get('/adminpanel',[AdminPanelController::class, 'index'])->name('admin-panel');

Route::resource('adminpanel/types', TypeController::class);

Route::resource('adminpanel/tattoos', TattooController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
