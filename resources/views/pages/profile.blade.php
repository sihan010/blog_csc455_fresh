@extends('layout')
@section('title','ideaHUNT.net | Profile')
@section('content')
      <div class="row">
      		<p style="text-align: center;font-size: 40px">Profile</p>
      		<hr>
        	<div class="well">
        	<dl class="dl-horizontal" style="text-align: center;font-size: 20px">
        		<dt>Name:</dt>
        		<dd> {{Auth::user()->name}}</dd>
        		<dt>Email:</dt>
        		<dd>{{Auth::user()->email}} </dd>
        	</dl>       			        		
        	</div>
      </div>
      <hr>
@endsection