<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use Redirect;

class PagesController extends Controller
{
    public function getIndex(){
        $tags=Tag::all();
        $posts=Post::orderBy('created_at','desc')->limit(6)->get();
    	return view('pages.index')->with('posts',$posts)->with('tags',$tags);
    }
    public function getAbout(){
    	return view('pages.about');
    }
    public function getContact(){
    	return view('pages.contact');
    }    
    public function getProfile(){
        return view('pages.profile');      
    }
}
