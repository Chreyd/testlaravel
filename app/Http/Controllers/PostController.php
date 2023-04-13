<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        // $post= Post::find(1);
        // $post->update([
        //     'title'=>'Mon Titre N~1',
        //     'content'=>'Mon Contenu N~1',
        // ]);

        //
        // $post= Post::find(5);
        // $post->delete();
        //dd("édité");

        //
        // $posts = Post::orderBy('title')->take(3)->get();
        // dd($posts);

        return view('articles', compact('posts'));
    }
    public function show($id){
        $post=Post::findOrFail($id);

        // $post= Post::where('title','=', 'Ullam facere quia tenetur.')->get()->firstOrFail();

        return view('article',[
            'post'=>$post
        ]);
    }

    public function contact(){
        return view('contact');
    }
    public function create(){
        return view('form');
    }

    public function store(Request $request){

                // dd($request->input('content'));
        // dd($request->content);

/*         $post = new Post();

        $post->title= $request->title;
        $post->content= $request->content;

        $post->save(); */

        Post::create([
            'title'=>$request->title,
            'content'=>$request->content
        ]);

        dd('post créé !');



    }
}
