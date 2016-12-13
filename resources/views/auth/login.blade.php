@extends('layout')
@section('title','ideaHUNT.net | Sign In')
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 style="text-align: center;">" Sign In "  to ideaHUNT.net</h1><hr>
			{!! Form::open() !!}
				{{Form::label('email','E-Mail:')}} <br>
		    	{{Form::email('email',null,array('class'=>'form-control','placeholder'=>'E-Mail',
		    	'required'))}}


		    	{{Form::label('password','Password:')}} <br>
		    	{{Form::password('password',array('class'=>'form-control','placeholder'=>'Password',
		    	'required'))}}

		    	{{ Form::checkbox('agree', 1, true) }}{{'  Remember Me'}}


		    	<hr>

		    	{{Form::submit('Sign In',array('class'=>'btn btn-success btn-lg','style'=>'margin-left:45%'))}}

		    	<a href="{{url('password/reset')}}" style="margin-left:43%;padding-top: 10px">Forgot Password ?</a>
		    	<hr>
			{!! Form::close() !!}

		</div>
	</div>
@endsection