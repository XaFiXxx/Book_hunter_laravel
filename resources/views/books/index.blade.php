@extends('templates.index')

@section('title')
    Books Index
@stop

@section('content')
   @include('books._index', [
    'books' => \App\Models\Book::orderBy('created_at', 'DESC')->limit(9)->get(),
])
@stop