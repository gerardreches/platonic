
@extends('core::layouts.dashboard')


@section('head')

	@parent

@endsection


@section('content')
	
	<h1>Application Modules</h1>
	<div class="gap"></div>
	<div class="fluid-grid">
		<div class="one-fifth-width"><h5>Name</h5></div>
		<div class="one-fifth-width"><h5>Version</h5></div>
		<div class="one-fifth-width"><h5>Author</h5></div>
		<div class="two-fifth-width"><h5>Description</h5></div>
	</div>
	<hr>
	@foreach($modules as $module)
		
		<div class="fluid-grid">
			<div class="one-fifth-width">{{ $module->get('name') }}</div>
			<div class="one-fifth-width">{{ $module->get('version') }}</div>
			<div class="one-fifth-width">{{ $module->get('author') }}</div>
			<div class="two-fifth-width">{{ $module->get('description') }}</div>
		</div>

	@endforeach

@endsection