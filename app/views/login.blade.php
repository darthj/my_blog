@extends('layouts.master')

@section('content')
	<div class="container">
		{{ Form::open(array('action' => 'HomeController@postLogin')) }}
		<div class="form-group">
		    {{ Form::label('email', 'Email') }}
			{{ Form::text('email', null, array('placeholder'=> 'Type email Here', 'class'=>'form-control')) }} 
		 </div>
		<div class="form-group">
		    {{ Form::label('password', 'Password') }}
			{{ Form::text('password', null, array('placeholder'=> 'Type password Here', 'class'=>'form-control')) }} 
		  </div>
		  <button type="submit" class="btn btn-default">Login</button>
		{{ Form::close() }}
	</div>
	</div>
@stop