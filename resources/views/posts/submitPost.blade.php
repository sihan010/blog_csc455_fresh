@extends('layout')
@section('title','ideaHUNT.net | Create Blog')
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 style="text-align: center;">Create New Post</h1><hr>
			{!! Form::open(array('route'=>'posts.store','files'=>true)) !!}
				{{Form::label('postTitle','Post Title:')}} <br>
		    	{{Form::text('postTitle',null,array('class'=>'form-control input-lg','placeholder'=>'Blog Title','required'))}}

		    	{{Form::label('URL','Blog URL:',['style'=>'margin-top:10px'])}} <br>
		    	<p style="font-size: 14px;  color:grey;">*URL Must be Unique and Only Alpha-Numeric Characters 
		    	(' - ' and ' _ ' included) are allowed</p>
		    	{{Form::text('URL',null,array('class'=>'form-control','placeholder'=>'Please Give an Unique URL to Your Blog','required','minlength'=>'5','maxlength'=>'255'))}}

		    	{{Form::label('category','Category:',['style'=>'margin-top:10px'])}} <br>
		    	<select class="form-control" name="category">
		    		<option value="6">Miscellanious</option>
		    		<option value="1">Physics</option>
		    		<option value="2">Astronomy</option>
		    		<option value="3">Computer Science</option>
		    		<option value="4">Literature</option>
		    		<option value="5">Music & Movies</option>		    		
		    	</select>

		    	{{Form::label('tag','Select Tag(s):',['style'=>'margin-top:10px'])}}
		    	<select class="form-control select2-multi" name="tags[]" multiple="multiple">
		    		@foreach($tags as $tag)
		    			<option value="{{$tag->id}}">{{$tag->tag_name}}</option>
		    		@endforeach	    		
		    	</select>


		    	{{Form::label('image','Upload Image:',['style'=>'margin-top:10px'])}}
		    	{{Form::file('image')}}

		    	{{Form::label('postContent','Your Blog:',['style'=>'margin-top:10px'])}} <br>
		    	{{Form::textarea('postContent',null,array('class'=>'form-control','placeholder'=>'Blog Body',
		    	'required'))}}<hr>

		    	{{Form::submit('Post Blog',array('class'=>'btn btn-success btn-lg','style'=>'margin-left:45%'))}}<hr>
			{!! Form::close() !!}
		</div>
	</div>
@endsection
