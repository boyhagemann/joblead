@extends('layouts.default')

@section('content')

Dashboard

<h3>Leads</h3>
@foreach($leads as $lead)
<div>
	<a href="">{{ $lead->name }}</a> for job <strong>{{ $lead->job->name }}</strong>
</div>
@endforeach

@stop

@section('sidebar')

@stop