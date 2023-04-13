@extends('layouts.app')


@section('content')
    <h2>{{ $post->title }} </h2>
    <br>

    <div class="container">
        <strong>Description</strong>
        <div>
            {{$post->content}}
        </div>
    </div>
@endsection
