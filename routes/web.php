<?php
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ArticleController;
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

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery.index');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/info/{info}', [InfoController::class, 'edit'])->name('info.edit');
    Route::patch('/info/{info}', [InfoController::class, 'update'])->name('info.update');
    
    
    Route::get('/articles/index', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('article.store');
    Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');
    
    
    
});


require __DIR__.'/auth.php';
