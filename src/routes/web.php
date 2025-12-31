<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\ContactAdminController;
use App\Http\Controllers\Admin\PostAdminController;
use App\Http\Controllers\Admin\CategoryAdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RobotsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\TopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public (HP)
|--------------------------------------------------------------------------
*/

Route::get('/', [TopController::class, 'index'])->name('top');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/cases', [CaseController::class, 'index'])->name('cases');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');

// Contact (POST)
Route::post('/contact/inquiry', [ContactController::class, 'inquiry'])->name('contact.inquiry');
Route::post('/contact/download', [ContactController::class, 'download'])->name('contact.download');
Route::post('/contact/consultation', [ContactController::class, 'consultation'])->name('contact.consultation');

// SEO
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/robots.txt', [RobotsController::class, 'index'])->name('robots');

/*
|--------------------------------------------------------------------------
| Dashboard / Profile (Breeze)
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Admin (Contacts)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/contacts', [ContactAdminController::class, 'index'])->name('contacts.index');
        Route::get('/contacts/export', [ContactAdminController::class, 'export'])->name('contacts.export');
        Route::get('/contacts/{contact}', [ContactAdminController::class, 'show'])->name('contacts.show');
        Route::patch('/contacts/{contact}/status', [ContactAdminController::class, 'updateStatus'])->name('contacts.updateStatus');
        
        // Posts (Blog)
        Route::resource('posts', PostAdminController::class);
        
        // Categories
        Route::resource('categories', CategoryAdminController::class);
    });

require __DIR__.'/auth.php';
