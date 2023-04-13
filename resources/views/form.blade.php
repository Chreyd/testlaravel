@extends('layouts.app')

@section('content')
    <h2>Nouveau Post</h2>
    <form action=" {{route('post.store')}} " method="post">
        @csrf
        <input style="border:1px solid black" type="text" name="title" id="title" placeholder="Titre">
        <textarea style="border:1px solid black" name="content" id="content" cols="30" rows="10" placeholder="Commentaire" ></textarea>
        <button type="submit" style="background-color:#6F6">Créer</button>
    </form>
@endsection
