<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PublicController extends Controller
{
    public function getIdea($slug){
    	$post=Post::where('slug','=', $slug )->first();
    	return view('public.show')->with('post',$post);
    }
    public function getIndex(){
    	$posts=Post::orderBy('id','desc')->paginate(10);
    	return view('public.index')->with('posts',$posts);
    }
}
