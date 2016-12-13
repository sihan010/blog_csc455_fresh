@extends('layout')
@section('title','ideaHUNT.net | Forgot Password')
@section('content')
<div>
	@if(session('status'))
		<div class="alert alert-success">
			<p style="text-align: center;">We have E-Mailed You a Password Reset Link!<br>
			Please Check Your Inbox and Click the Link to Continue.
			</p>
		</div>
	@endif

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			
			<h1 style="text-align: center;">Password Reset Form</h1><hr>
			{!! Form::open(['url'=>'password/email','method'=>'POST']) !!}

				{{Form::label('email','E-Mail:')}} <br>
		    	{{Form::email('email',null,array('class'=>'form-control',
		    	'placeholder'=>'Previously Registered E-Mail','required'))}}

		    	<hr>

		    	{{Form::submit('Recover Password',array('class'=>'btn btn-success btn-lg',
		    	'style'=>'margin-left:35%'))}}<hr>
			{!! Form::close() !!}
		</div>
	</div>
	
</div>
	
@endsection