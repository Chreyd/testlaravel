<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Video;
use App\Rules\Uppercase;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $video= Video::find(1);

        return view('articles', compact('posts','video'));
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);

        // $post= Post::where('title','=', 'Ullam facere quia tenetur.')->get()->firstOrFail();

        return view('article', [
            'post' => $post
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'title' => 'required|min:5|max:30|unique:posts',
            'title' => ['required','min:5','max:30','unique:posts', new Uppercase],
            'content' => ['required']
        ]);

        // dd($request->avatar->store('avatars'));
        // dd($request->avatar->extension());
        // dd($request->boolean('pain'),$request->boolean('galette'),$request->all());

        // dd($request->input('content'));
        // dd($request->content);

        /*         $post = new Post();

        $post->title= $request->title;
        $post->content= $request->content;

        $post->save(); */

        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        dd('post créé !');
    }
    public function register()
    {
        $post = Post::find(10);
        $video = Video::find(1);

        $comment1 = new Comment([
            'content' => 'Mon tout premier commentaire de la table comments',
        ]);
        $comment2 = new Comment([
            'content' => 'Mon deuxième commentaire de la table comments',
        ]);
        $post->comments()->saveMany([
            $comment1,
            $comment2
        ]);

        $comment3 = new Comment([
            'content' => 'Mon troisième commentaire de la table comments (pour les vidéos)',
        ]);
        $video->comments()->save($comment3);
    }
}
