<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Session;
use Auth;
use Image;
use App\Tag;
use Storage;

class PostsController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $poster=Auth::user()->name;
        $posts=Post::where('poster','=', $poster )->orderBy('id','desc')->paginate(5);
        //$posts=Post::orderBy('id','desc')->paginate(5);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $tags=Tag::all();
        return view('posts.submitPost')->with('categories',$categories)->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'title'=>'max:255',
            'category'=>'required|integer',
            'URL'=>'alpha_dash|min:5|max:255|unique:posts,slug',
            'image'=>'sometimes|image'
        ));
        $post=new Post ;
        $post->title=$request->postTitle;
        $post->slug=$request->URL;
        $post->content=$request->postContent;
        $post->poster= Auth::user()->name;
        $post->category_id= $request->category;

        if($request->hasFile('image'))
        {
            $img=$request->file('image');
            $filename=time().'.'.$img->getClientOriginalExtension();
            $location=public_path('postImg/'.$filename);
            Image::make($img)->resize(800,400)->save($location);

            $post->image=$filename;
        }

        $post->save();

        $post->tags()->sync($request->tags,false);

        Session::flash('done', "Your Blog was Successfully Posted");

        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('posts.showPost')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        $tags=Tag::all();
        $tags2=array();
        foreach($tags as $tag)
        {
            $tags2[$tag->id]=$tag->tag_name;
        }
        return view('posts.edit')->with('post',$post)->with('tags2',$tags2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post=Post::find($id);
        if ($request->input('slug')== $post->slug) {
            $this->validate($request,array(
                'title' => 'max:255',
                'category'=>'required|integer',
                'image' =>'image'
            ));
        }
        else{
            $this->validate($request,array(
                'title' => 'max:255',
                'category'=>'required|integer',
                'URL'=>'alpha_dash|min:5|max:255|unique:posts,slug',
                'image' =>'image'
            ));
        }
        
        $post=Post::find($id);
        $post->title= $request->input('title');
        $post->slug=$request->input('slug');
        $post->content= $request->input('content');
        $post->category_id= $request->category;

        if($request->hasFile('image')){
            $img=$request->file('image');
            $filename=time().'.'.$img->getClientOriginalExtension();
            $location=public_path('postImg/'.$filename);
            Image::make($img)->resize(800,400)->save($location);
            
            $old=$post->image;

            $post->image=$filename;
            Storage::delete($old);

        }

        $post->save();

        if(isset($request->tags))
        {
            $post->tags()->sync($request->tags,false);
        }
        else
        {
            $post->tags()->sync(array());
        }
        

        Session::flash('done','Your Blog was Succeccfully Updated');

        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->tags()->detach();
        Storage::delete($post->image);
        $post->delete();
        Session::flash('done','Your Post was Successfully Deleted');
        return redirect()->route('posts.index');
    }
}
