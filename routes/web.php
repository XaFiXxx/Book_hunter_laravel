<?php

use Illuminate\Support\Facades\Route;

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

