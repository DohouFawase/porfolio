<?php

use App\Http\Controllers\admin\porfolio\BioController;
use App\Http\Controllers\admin\porfolio\CategorieController;
use App\Http\Controllers\admin\porfolio\DashboardController;
use App\Http\Controllers\admin\porfolio\ProjectController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\porfolio\PortfolioController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::prefix('web')->group(function(){
    $idRegex = '[0-9]+';
    $slugRegex = '[0-9a-z\-]+';
    Route::get('/', [HomeController::class, 'index'])->name('web.index');
    Route::get('portfolio/{slug}', [PortfolioController::class, 'index'])->name('portfolio');
});





Route::prefix('admin')->name('admin.')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::resource('dashboard', DashboardController::class);
    Route::resource('categorie', CategorieController::class)->except(["show"]);
    Route::resource('project', ProjectController::class)->except(["show"]);
    Route::resource('bio', BioController::class )->except(['show']);
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
