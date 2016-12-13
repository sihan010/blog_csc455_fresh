@extends('layout')
@section('title','ideaHUNT.net')
@include('partials._caurosel') 
@section('content')

<div class="row">
  <div class="col-md-8">
      <div class="well">
        <h2 style="text-align: center;">Latest Posts</h2><hr>
          @foreach($posts as $post)
            <div class="well">                  
                
              <h3>{{$post->title}}</h3>
              <p>{{substr($post->content, 0,200)}}{{(strlen($post->content)>200)?".....":""}}</p>
              <p><a class="btn btn-default" href="{{route('idea.show',$post->slug)}}" role="button">Read Full Post &raquo;</a></p>
                
              
            </div>
          @endforeach
      </div>
  </div> 
   
   <div class="col-md-4">
     <div class="well">
        <h2 style="text-align: center;">Tags</h2><hr>
        @foreach($tags as $tag)
          <label class="lable label-info" style="margin: 5px"><a href="{{route('tags.show',$tag->id)}}">
          {{$tag->tag_name}}</a></label>
        @endforeach
    </div>
   </div> 
</div>

  
    
    <hr>
@endsection