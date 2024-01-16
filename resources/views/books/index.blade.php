@extends('templates.index')

@section('title')
    Books Index
@stop

@section('content')
@php
 $books = \App\Models\Book::orderBy('created_at', 'DESC')->paginate(9);
@endphp
   @include('books._index', ['books' => $books])

   <div class="mt-8 flex justify_center">{{ $books->links() }}</div>
@stop