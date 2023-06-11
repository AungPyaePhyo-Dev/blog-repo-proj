<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Portal\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',  [HomeController::class, 'index'])->name('home');
Route::get('/about',  [HomeController::class, 'about'])->name('about');
Route::get('/contact',  [HomeController::class, 'contact'])->name('contact');
Route::post('/search', [HomeController::class, 'search'])->name('search');
Route::get('/post/{slug}', [HomeController::class, 'postView'])->name('post.view');
Route::post('/contact', [ContactController::class, 'contactStore'])->name('contact');

Route::get('/post_by_category/{id}', [HomeController::class, 'postByCategory'])->name('post_by_category');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('category', CategoryController::class);

    Route::resource('post', PostController::class);

    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('contact/{id}', [ContactController::class, 'show'])->name('contact.show');
    Route::delete('contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
});




Route::get('/admin/dashboard', function() {
    return view('admin.dashboard.index');
})->name('dashboard');

require __DIR__.'/auth.php';
