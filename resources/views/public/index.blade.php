@extends('layout')
@section('title','ideaHUNT.net | All Posts')
@section('homeButt',"class='active'")
@section('content')
	<div class="row">	
		<div class="col-md-12">
			<h1>All Posts</h1><hr>
		</div>
	</div>
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
							<td>
								<a href="{{route('idea.show',$post->slug)}}" class="btn btn-md btn-primary btn-block">View</a>
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