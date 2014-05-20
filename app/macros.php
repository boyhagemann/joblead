<?php


Form::macro('emailStyled', function($name, $label) {
	return View::make('elements.email', compact('name', 'label'));
});
Form::macro('textStyled', function($name, $label) {
	return View::make('elements.text', compact('name', 'label'));
});
Form::macro('passwordStyled', function($name, $label) {
	return View::make('elements.password', compact('name', 'label'));
});