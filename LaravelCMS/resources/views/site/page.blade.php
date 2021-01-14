@extends('site.layout')

@section('title', $page['title'])

@section('content')

<h1>{{$page['title']}}</h1>


<div class="container my-4">
    {!! $page['body'] !!}
</div>
@endsection