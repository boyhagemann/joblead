@extends('layouts.default')

@section('content')

	<h1>Login</h1>

	{{ Form::open(array('route' => 'account.auth')) }}

	{{ Form::emailStyled('email', 'E-mail') }}
	{{ Form::passwordStyled('password', 'Password') }}

	<div class="form-group">
		{{ Form::submit('Register', array('class' => 'btn btn-lg btn-primary')) }}
	</div>

	{{ Form::close() }}

@stop