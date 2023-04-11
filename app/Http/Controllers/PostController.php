<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $title = 'Mon super titre';
    public function index()
    {
        $posts = [
            'Mon super titre 1',
            'Mon super titre Deuxième',
        ];

        return view('articles', compact('posts'));
    }
    public function show($id){
        $posts = [
           1=> 'Mon super titre 1',
           2=> 'Mon super titre Deuxième',
        ];
        $post= $posts[$id] ?? 'pas de titre';//terner
        return view('article',[
            'post'=>$post
        ]);
    }

    public function contact(){
        return view('contact');
    }
}
