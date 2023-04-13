<!DOCTYPE html>
<html lang="en">

@extends('layouts.app')


@section('content')

    @if ($posts->count()>0)
        @foreach ($posts as $post)
            <h1><a href="{{route('posts.show', ['id'=>$post->id])}} "> {{ $post->title }}</a> </h1>
        @endforeach
        @else
        <span>Aucun Post en base de données</span>
    @endif


@endsection
