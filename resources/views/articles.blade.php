<!DOCTYPE html>
<html lang="en">

@extends('layouts.app')


@section('content')
    @foreach ($posts as $post)
        <h1><a href="#"> {{ $post }}</a> </h1>
    @endforeach

    <article>Liste des articles</article>
@endsection
