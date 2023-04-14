@extends('layouts.app')


@section('content')
    <h2>{{ $post->title }} </h2>
    <br>

    <div class="container">
        <strong>Description</strong>
        <div>
            {{ $post->content }}
        </div>
        <hr>
        <div>
            <ul>
                @forelse ($post->comments as $comment)
                    <li>{{ $comment->content }} || créé le {{$comment->created_at->toDateTimeString()}} </li>

                @empty
                    <li>Récupération de données impossible</li>
                @endforelse

            </ul>
        </div>
    </div>
@endsection
