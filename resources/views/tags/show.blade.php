@extends('layout')
@section('title','ideaHUNT.net | Tagged Posts')
@section('content')
	<div class="row">	
		<div class="col-md-12">
			<h1 style="text-align: center;">"{{$tag->tag_name}}" <small>Total {{$tag->posts()->count()}} Posts</small><hr></h1> 
		</div>
		<!--<div class="col-md-4" style="margin-top: 30px">
			<button class="btn btn-primary btn-md" style="width: 150px" 
			onclick="{{route('tags.edit',$tag->id)}}">Edit</button>
			<button class="btn btn-danger btn-md pull-right" style="width: 150px" 
			onclick="{{route('tags.destroy',$tag->id)}}">Delete</button>
		</div> -->
	</div>
	<div class="row">
		<div class="col-md-12">
		@if(count($tag->posts)>0)
			<table class="table table-bordered table-hover">
				<thead>
					<th>No.</th>
					<th>Title</th>
					<th>Content</th>
					<th>Tags</th>
					<th>Control</th>
				</thead>
				<tbody>
					@foreach($tag->posts as $post)
						<tr>
							<th>{{$post->id}}</th>
							<td>{{$post->title}}</td>
							<td>{{substr($post->content,0,110)}}{{(strlen($post->content)>110)?".....":""}}</td>
							<td>
								@foreach($post->tags as $tag)
									<label class="label label-info">{{$tag->tag_name}}</label>
								@endforeach
							</td>
							<td>
								<a href="{{route('idea.show',$post->slug)}}" class="btn btn-md btn-primary btn-block">View</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@endif
		</div>
	</div>
	
@endsection