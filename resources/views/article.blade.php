@extends('layouts.app')


@section('content')
    <h2>{{$post->id}}: {{ $post->title }} </h2>
    <br>

    <div class="container">
        <strong>Description</strong>
        <div>
           {{ $post->content }}
        </div>
        <hr>
        <p>{{$post->image ? $post->image->path: "Pas d'image associé à ce poste"}} </p>
        <hr>
        <div>
            <ul>
                @forelse ($post->comments as $comment)
                    <li>Content: {{ $comment->content }} || créé le {{$comment->created_at->toDateTimeString()}} </li>

                @empty
                    <li>Aucun content pour ce poste</li>
                @endforelse



            </ul>
            <hr>
            @forelse ($post->tags as $tag )
                <p>Tag: {{$tag->name}} </p>
            @empty
                <p>Aucun tag pour ce poste</p>
            @endforelse
        </div>
    </div>
@endsection
