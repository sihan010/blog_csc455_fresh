@extends('layout')
@section('title','ideaHUNT.net | All Posts')
@section('content')
	<div class="row">	
	<div class="col-md-8">
		<h3>Haven't Posted a Blog yet ?<br>Want to Post a Blog?<br>Click <a href="{{route('posts.create')}}">Here</a>
		or Click "Post a New Blog" Button at the Right</h3><hr>
	</div>
	<div class="col-md-2" style="margin-top: 30px">
		<a href="{{route('posts.create')}}" type="button" class="btn btn-lg btn-success btl-block">Post a New Blog</a>
	</div>
	</div>
	<h1>All Posts</h1>
	<h2 style="text-align: center;">Latest Blogs Appear First</h2>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-hover">
				<thead>
					<th>No.</th>
					<th>Title</th>
					<th>Content</th>
					<th>Created At</th>
					<th>Control</th>
				</thead>
				<tbody>
					@foreach($posts as $post)
						<tr>
							<th>{{$post->id}}</th>
							<td>{{$post->title}}</td>
							<td>{{substr($post->content,0,220)}}{{(strlen($post->content)>220)?".....":""}}</td>
							<td>{{date('M j Y', strtotime($post->created_at))}}</td>
							<td style="width: 100px;"><a href="{{route('posts.show',$post->id)}}" class="btn btn-md btn-primary btn-block">View</a>
							<a href="{{route('posts.edit',$post->id)}}" class="btn btn-md btn-primary btn-block">Edit</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
				{!! $posts->links(); !!}
			</div>
		</div>
	</div>
	
@endsection