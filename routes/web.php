<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/вышки-туры', [PageController::class, 'towers_tour'])->name('towers_tour');
Route::get('/техника', [PageController::class, 'technics'])->name('technics');
Route::get('/строительные-леса', [PageController::class, 'scaffolding'])->name('scaffolding');
Route::get('/уборка-снега-с-крыш', [PageController::class, 'snow_removal'])->name('snow_removal');
Route::get('/галерея-строительных-лесов-и-вышек-тур', [PageController::class, 'gallery'])->name('gallery');
Route::get('/галерея-вышек-тур', [PageController::class, 'gallery_tower'])->name('gallery_tower');
Route::get('/галерея-строительных-лесов', [PageController::class, 'gallery_scaffolding'])->name('gallery_scaffolding');
Route::get('/галерея-техника', [PageController::class, 'gallery_technics'])->name('gallery_technics');
Route::get('/галерея-уборка-снега', [PageController::class, 'gallery_snow_removal'])->name('gallery_snow_removal');
Route::get('/минитрактор', [PageController::class, 'technics_bars'])->name('technics_bars');
Route::get('/наши-контакты', [PageController::class, 'contacts'])->name('contacts');
Route::get('/статьи', [PageController::class, 'posts'])->name('posts');
Route::post('/письмо-отправлено', [MailController::class, 'send'])->name('send');


Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('/posts', PostController::class);
});

Route::middleware('guest')->group(function () {
    Route::get('/av-register', [UserController::class, 'create'])->name('register.create');
    Route::post('/av-register', [UserController::class, 'store'])->name('register.store');
    Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});

Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

Route::fallback(function () {
    abort(404);
    abort(500);
});
