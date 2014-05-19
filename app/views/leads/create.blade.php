@extends('layouts.default')

@section('content')

<div class="col-sm-4">

	{{ Form::open(array('route' => array('leads.store', $job->id))) }}

		<div class="form-group">
			<label for="name">Name</label>
			{{ Form::text('name', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			<label for="name">Date of birth</label>
			{{ Form::text('date_of_birth', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::submit('Send', array('class' => 'btn btn-lg btn-primary')) }}
		</div>

	{{ Form::close() }}

</div>

@stop