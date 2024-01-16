@extends('templates.index')

@section('title')
    Authors Index
@stop

@section('content')
@php 
$authors = App\Models\Author::orderBy('created_at', 'DESC')->paginate(9);
@endphp
   @include('authors._index', [
    'authors' => $authors,
])
<div class="mt-8 flex justify_center">{{ $authors->links() }}</div>
@stop