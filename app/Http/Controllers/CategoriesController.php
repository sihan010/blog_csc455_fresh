<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class CategoriesController extends Controller
{
    public function getPhysics(){
    	$id=1;
    	$posts=Post::where('category_id','=', $id)->paginate(10);
    	return view('category.index')->withPosts($posts);
    }
    public function getAstro(){
    	$id=2;
    	$posts=Post::where('category_id','=', $id)->paginate(10);
    	return view('category.index')->withPosts($posts);
    }
    public function getCS(){
    	$id=3;
    	$posts=Post::where('category_id','=', $id)->paginate(10);
    	return view('category.index')->withPosts($posts);
    }
    public function getLit(){
    	$id=4;
    	$posts=Post::where('category_id','=', $id)->paginate(10);
    	return view('category.index')->withPosts($posts);
    }
    public function getMM(){
    	$id=5;
    	$posts=Post::where('category_id','=', $id)->paginate(10);
    	return view('category.index')->withPosts($posts);
    }
    public function getMisc(){
    	$id=6;
    	$posts=Post::where('category_id','=', $id)->paginate(10);
    	return view('category.index')->withPosts($posts);
    }
}
