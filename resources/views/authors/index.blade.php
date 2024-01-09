@extends('templates.index')

@section('title')
    Authors Index
@stop

@section('content')
   @include('authors._index', [
    'authors' => \App\Models\Author::orderBy('created_at', 'DESC')->limit(9)->get(),
])
@stop