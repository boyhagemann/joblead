@extends('layouts.default')

@section('content')

<article>
	<h1>{{ $job->name }}</h1>
</article>

<div>
	<a href="{{ URL::route('leads.create', $job->slug) }}" class="btn btn-xl btn-primary">I know someone!</a>
</div>
@stop