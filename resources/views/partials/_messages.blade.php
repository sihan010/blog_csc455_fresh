@if(Session::has('done'))
	<div class="alert alert-success" role="alert" style="text-align: center">
		{{Session::get('done')}}
	</div>
@endif

@if(count($errors)>0)
	<div class="alert alert-danger" role="alert">
		<strong>Error Occured:</strong>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif