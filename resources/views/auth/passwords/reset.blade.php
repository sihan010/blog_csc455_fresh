@extends('layout')
@section('title','ideaHUNT.net | Forgot Password')
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 style="text-align: center;">Password Reset Form</h1><hr>
			{!! Form::open(['url'=>'password/reset','method'=>'POST']) !!}
			
				{{Form::hidden('token',$token)}}

				{{Form::label('email','E-Mail:')}} <br>
		    	{{Form::email('email',$email,array('class'=>'form-control'))}}

		    	{{Form::label('password','Password:')}} <br>
		    	{{Form::password('password',array('class'=>'form-control','placeholder'=>'Password',
		    	'required'))}}


		    	{{Form::label('password_confirmation','Confirm Password:')}} <br>
		    	{{Form::password('password_confirmation',array('class'=>'form-control','placeholder'=>'Confirm Password',
		    	'required'))}}	

		    	<hr>

		    	{{Form::submit('Recover Password',array('class'=>'btn btn-success btn-lg',
		    	'style'=>'margin-left:35%'))}}<hr>
			{!! Form::close() !!}
		</div>
	</div>
@endsection