@extends('layouts.app')

@section('content')

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="text-red-500" style="color:#F00">
            {{$error}}
        </div>
    @endforeach
@else

@endif
    <h2>Nouveau Post</h2>
    <form action=" {{ route('post.store') }} " method="post" enctype="multipart/form-data">
        @csrf
        <input style="border:1px solid black" type="text" name="title" id="title" placeholder="Titre">
        <textarea style="border:1px solid black" name="content" id="content" cols="30" rows="10"
            placeholder="Commentaire">
        </textarea>
        {{-- <div>
            <label for="pain">pain</label>
            <input type="checkbox" name="pain" id="pain">
        </div>
        <div>
            <label for="galette">galette</label>
            <input type="checkbox" name="galette" id="galette">
        </div>
        <div>
            <label for="avatar">image</label>
            <input type="file" name="avatar" accept="image/png,image/jpg" id="avatar">
        </div>--}}
        <button type="submit" style="background-color:#6F6">Créer</button>
    </form>
@endsection
