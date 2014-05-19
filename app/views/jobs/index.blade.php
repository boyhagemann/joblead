@extends('layouts.default')

@section('content')

@foreach($jobs as $job)
<div>
	<a href="{{ URL::route('jobs.show', $job->id) }}">{{ $job->name }}</a>
</div>
@endforeach

@stop