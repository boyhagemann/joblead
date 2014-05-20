@foreach($leads as $lead)
<div>
	<a href="{{ URL::route('jobs.show', $job->slug) }}">{{ $lead->name }}</a> for job <strong>{{ $lead->job->name }}</strong>
</div>
@endforeach