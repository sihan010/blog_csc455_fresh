@extends('layout')
@section('title','ideaHUNT.net | Register')
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 style="text-align: center;">" Register "  to ideaHUNT.net</h1><hr>
			{!! Form::open() !!}

				{{Form::token() }}

				{{Form::label('name','Name:')}} <br>
		    	{{Form::text('name',null,array('class'=>'form-control','placeholder'=>'Name',
		    	'required'))}}

				{{Form::label('email','E-Mail:')}} <br>
		    	{{Form::email('email',null,array('class'=>'form-control','placeholder'=>'E-Mail',
		    	'required'))}}

		    	{{Form::label('password','Password:')}} <br>
		    	{{Form::password('password',array('class'=>'form-control','placeholder'=>'Password',
		    	'required'))}}


		    	{{Form::label('password_confirmation','Confirm Password:')}} <br>
		    	{{Form::password('password_confirmation',array('class'=>'form-control','placeholder'=>'Confirm Password',
		    	'required'))}}	    	

		    	<hr>

		    	{{Form::submit('Sign In',array('class'=>'btn btn-success btn-lg','style'=>'margin-left:45%'))}}<hr>
			{!! Form::close() !!}
		</div>
	</div>
@endsection