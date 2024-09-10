<?php

use App\Models\Arcs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArcController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AccueilControlleur;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\FrontendArticleController;

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

Route::get('/',[AccueilControlleur::class, 'indexArticle'])->name('accueil');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/article', [FrontendArticleController::class, 'index'])->name('article');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function(){
    //route du profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Route des arcs
    Route::controller(ArcController::class)->name('arcs.')->prefix('arcs')
    ->group(function () {
        Route::get('view/{slug}', 'index')->name('index');
        Route::get('create', 'createProfile')->name('profile');
        Route::delete('/arcs/{arc}','destroy')->name('destroy');
    });
});

Route::middleware(['auth', 'verified', 'role:admin,redacteur'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    Route::resource('users', UserController::class)->names([
        'index' => 'admin.users.index',
        'create' => 'admin.users.create',
        'store' => 'admin.users.store',
        'edit' => 'admin.users.edit',
        'update' => 'admin.users.update',
        'destroy' => 'admin.users.destroy',
    ]);

    //Route des articles
    Route::resource('articles', ArticleController::class)->names([
        'index' => 'admin.articles.index',
        'create' => 'admin.articles.create',
        'store' => 'admin.articles.store',
        'edit' => 'admin.articles.edit',
        'update' => 'admin.articles.update',
        'destroy' => 'admin.articles.destroy',
    ]);

});

require __DIR__.'/auth.php';
