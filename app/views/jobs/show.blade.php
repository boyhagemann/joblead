@extends('layouts.default')

@section('content')

<article>
    <header>
        <h1>{{ $job->name }}</h1>        
    </header>
    {{ $job->body }}
</article>

<hr>

<section>
	<a href="{{ URL::route('leads.create', $job->slug) }}" class="btn btn-lg btn-primary">I know someone!</a>
</section>
@stop


@section('sidebar')
<section>
	<a href="{{ URL::route('leads.create', $job->slug) }}" class="btn btn-lg btn-primary">I know someone!</a>
</section>
@stop