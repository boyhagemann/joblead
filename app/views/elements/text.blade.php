
<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
	<label class="control-label" for="{{ $name }}">{{ $label }}</label>
	{{ Form::text($name, null, array('class' => 'form-control')) }}
	{{ $errors->first($name, '<p class="help-block">:message</p>') }}
</div>