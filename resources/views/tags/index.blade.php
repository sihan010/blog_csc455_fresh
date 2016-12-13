@extends('layout')
@section('title','ideaHUNT.net | Tag View')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Tags</h1>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-8">
			@if(count($tags)>0)
				<!--<table class="table table-bordered table-hover">
					<thead>
						<th>No.</th>
						<th>Tag Name</th>
					</thead>
					<tbody>
						@foreach($tags as $tag)
							<tr>
								<th>{{$tag->id}}</th>
								<td>{{$tag->tag_name}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>-->
				@foreach($tags as $tag)
							
					{{'--> '}}{{$tag->tag_name." <--"}}
							
				@endforeach
			@endif
			<p style="text-align: center;margin-top: 15px;">------>Showing Latest 50 Tags<-------</p>			
		</div>
		<div class="col-md-4">
			{!!Form::open(['route'=>'tags.store','method'=>'POST'])!!}
				<h2 style="text-align: center">Create New Tag</h2><hr>
				{!!Form::label('new','New Tag:')!!}
				{!!Form::text('new',null,['class'=>'form-control','placeholder'=>'New Tag Name'])!!}

				{!!Form::submit('Save New Tag',['class'=>'btn btn-success btn-md','style'=>'margin-top:10px;margin-left:42%'])!!}
			{!!Form::close()!!}
		</div>
		
	</div>
	<hr>
@endsection