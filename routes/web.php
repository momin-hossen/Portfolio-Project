<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('admin/dashboard', [Pagescontroller::class, 'dashboard'])->name('dashboardd');
Route::get('admin/home', [PagesController::class, 'home'])->name('home');
Route::get('admin/about', [PagesController::class, 'about'])->name('about');
Route::get('admin/services', [PagesController::class, 'services'])->name('services');
Route::get('admin/portfolio', [PagesController::class, 'portfolio'])->name('portfolio');
Route::get('admin/contact', [PagesController::class, 'contact'])->name('contact');









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
