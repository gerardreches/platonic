
@extends('core::layouts.dashboard')


@section('head')

	@parent

@endsection


@section('content')
	
	@can('edit_users', $user)
		hola
	@endcan

@endsection