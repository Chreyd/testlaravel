<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $title='Mon super titre';

    public function getTitle() {
		return $this->title;
	}

	/**
	 * @param mixed $title
	 * @return self
	 */
	public function setTitle($title): self {
		$this->title = $title;
		return $this;
	}


	/**
	 * @return mixed
	 */
    public function index(){
        $posts=[
            'Mon super titre 1',
            'Mon super titre Deuxième',
        ];
        $titre1='Mon super titre 1';
        $titre2='Mon super titre 2';
        // return view('articles')->with('titre',$titre1);
        // return view('articles',compact('titre1', 'titre2'));
/*         return view('articles',[
            'titre1'=>$titre1,
            'titre2'=>$titre2,
        ]); */
        return view('articles',compact('posts'));
    }
}
