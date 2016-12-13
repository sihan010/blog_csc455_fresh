@extends('layout')
@section('title','ideaHUNT.net | Edit Blog')
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 style="text-align: center;">Edit an Existing Post</h1><hr>
			{!! Form::model($post,['route'=>['posts.update' , $post->id ] , 'method'=>'PUT','files'=>true])!!}
				{{Form::label('title','Post Title:')}} <br>
		    	{{Form::text('title',null,array('class'=>'form-control input-lg','required'))}}


		    	{{Form::label('slug','Blog URL:')}} <br>
		    	<p style="font-size: 14px;  color:grey;">*URL Must be Unique and Only Alpha-Numeric Characters 
		    	(' - ' and ' _ ' included) are allowed</p>
		    	{{Form::text('slug',null,array('class'=>'form-control','required'))}}

		    	{{Form::label('category','Category:')}} <br>
		    	<select class="form-control" name="category">
		    		<option value="6">Miscellanious</option>
		    		<option value="1">Physics</option>
		    		<option value="2">Astronomy</option>
		    		<option value="3">Computer Science</option>
		    		<option value="4">Literature</option>
		    		<option value="5">Music & Movies</option>		    		
		    	</select>

		    	{{Form::label('tag','Select Tag(s):',['style'=>'margin-top:10px'])}}
		    	{{Form::select('tags[]',$tags2,null,['class'=>'form-control select2-multi','multiple'=>'multiple'])}}

		    	{{Form::label('image','Re-Upload Image:',['style'=>'margin-top:10px'])}}
		    	{{Form::file('image')}}

		    	{{Form::label('content','Your Blog:')}} <br>
		    	{{Form::textarea('content',null,array('class'=>'form-control','required'))}}<hr>

		    	{{Form::submit('Update Blog',array('class'=>'btn btn-success btn-lg','style'=>'margin-left:45%'))}}
			{!! Form::close() !!}
			<a href="{{route('posts.show',$post->id)}}" type="button" class="btn btn-danger btn-lg" style="margin-left:48%;margin-top: 20px;">Cancel</a><hr>
		</div>
	</div>
@endsection