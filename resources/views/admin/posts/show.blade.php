@extends('layouts.admin')

@section('content')
    <h1>{{ $post->title }}</h1>
    <img src="{{ $post->image }}" alt="{{ $post->title }}">
    <p>{!! $post->body !!}</p>
@endsection
