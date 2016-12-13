@extends('layout')
@section('title')
	ideaHUNT.net | {{ $post->title }}
@endsection
@section('content')
	<h1 class="lead well" style="text-align: center">{{ $post->title }}</h1> <hr>
	@if(count($post->image)>0)
		<div class="well">
			<img src="{{asset('postImg/'.$post->image)}}" style="margin-left: 14%" alt="No Image">
		</div>
	@endif
	<p class="lead well">{{ $post->content }}</p>
	<hr>
	<div class="row">
		@if(Auth::check())
			<div class="col-md-6">			
				{!!Form::open(['route'=>['comment.store',$post->id],'method'=>'POST'])!!}
					{!!Form::textarea('comment',null,['class'=>'form-control','placeholder'=>'Your Comment to This Blog Post'])!!}

					{!!Form::submit('Post Comment',['class'=>'btn btn-success btn-md','style'=>'margin-top:10px'])!!}
				{!!Form::close()!!}			
			</div>
			<div class="col-md-6">
				<div class="well">
				<h2 style="text-align: center;">Post Info</h2><hr>
					<dl class="dl-horizontal" style="text-align: center">
						<dt>Created At:</dt>
						<dd>{{date('M j Y', strtotime($post->created_at))}}</dd>

						<dt>Updated At:</dt>
						<dd>{{date('M j Y', strtotime($post->updated_at))}}</dd>

						<dt>Posted By:</dt>
						<dd> {{$post->poster}} </dd>

						<dt>Category:</dt>
						<dd> {{$post->category->name}} </dd>

						<dt>Blog URL:</dt>
						<dd> <a href="{{url('idea/'.$post->slug)}}">{{url('idea/'.$post->slug)}}</a></dd>

						@if(count($post->tags)>0)
						<dt>Tags:</dt>
						@foreach($post->tags as $tag)
							<label class="label label-info" style="margin:5px"> 
							{{$tag->tag_name}} </label> 
						@endforeach
					@endif
					</dl>
					<div class="row">
						<div class="col-sm-6">
							<a href="/" type="button" class="btn btn-default btn-block" style="margin-top: 10px"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true" style="margin-right: 20px"></span>Go to Home</a>
						</div>
						<div class="col-sm-6">
							<a href="{{route('idea')}}" type="button" class="btn btn-default btn-md btn-block" style="margin-top: 10px"><span class="glyphicon glyphicon-backward" area-hidden="true" style="margin-right: 20px"></span>Back to All Posts</a>
						</div>
					</div>
					
				</div>
			</div>
		@endif
		
		@if(!Auth::check())
			<div class="col-md-6">
				<h2>You are NOT Signed In<br>Please <a href="{{url('auth/login')}}">Sign In</a> OR 
				<a href="{{url('auth/register')}}">Sign Up</a> To Comment</h2>
			</div>
			<div class="col-md-6">
				<div class="well">
				<h2 style="text-align: center;">Post Info</h2><hr>
					<dl class="dl-horizontal" style="text-align: center">
						<dt>Created At:</dt>
						<dd>{{date('M j Y', strtotime($post->created_at))}}</dd>

						<dt>Updated At:</dt>
						<dd>{{date('M j Y', strtotime($post->updated_at))}}</dd>

						<dt>Posted By:</dt>
						<dd> {{$post->poster}} </dd>

						<dt>Category:</dt>
						<dd> {{$post->category->name}} </dd>

						<dt>Blog URL:</dt>
						<dd> <a href="{{url('idea/'.$post->slug)}}">{{url('idea/'.$post->slug)}}</a></dd>
					</dl>
					<div class="row">
						<div class="col-sm-6">
							<a href="/" type="button" class="btn btn-default btn-block" style="margin-top: 10px"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true" style="margin-right: 20px"></span>Go to Home</a>
						</div>
						<div class="col-sm-6">
							<a href="{{route('idea')}}" type="button" class="btn btn-default btn-md btn-block" style="margin-top: 10px"><span class="glyphicon glyphicon-backward" aria-hidden="true" style="margin-right: 20px"></span>Back to All Posts</a>
						</div>
					</div>
					
				</div>
			</div>
		@endif

	</div>
	<div class="row">
		<div class="col-md-12">
			@if(count($post->comments)>0)
			<h2 style="text-align: center;">Comments:</h2><hr>
			@foreach($post->comments as $comment)
				<div class="well">
					<h4>Commenter: {{$comment->name}} <br>Comment: {{$comment->comment}}<br>
					Commented At: {{date('M j Y', strtotime($post->updated_at))}}, Commenter's Email: 
					{{$comment->email}}</h4>
				</div>
			@endforeach
		@endif
		</div>
	</div>
	
@endsection