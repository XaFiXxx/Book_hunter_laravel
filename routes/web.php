<?php

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

Route::get('/', function () {
    return view('pages.home');
})->name('pages.home');

Route::get('/books', function () {
    return view('books.index');
})->name('books.index');

Route::get('/authors', function () {
    return view('authors.index');
})->name('authors.index');

Route::get('/books/{id}/{slug}', function (int $id) {
    return view('books.show', [
        'book' => \App\Models\Book::find($id)
    ]);
})->name('books.show');

Route::get('/authors/{id}/{slug}', function (int $id) {
    return view('authors.show', [
        'author' => \App\Models\Author::find($id)
    ]);
})->name('authors.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
