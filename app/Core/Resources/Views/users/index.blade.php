
@extends('core::layouts.dashboard')


@section('head')

	@parent

@endsection


@section('content')
	
	<h1>Users</h1>
	
	<div class="gap"></div>

	<table class="table">
		<thead>
			<tr>
				<th>Picture</th>
				<th>Username</th>
				<th>Display name</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>

			@foreach($users as $user)

				<tr class="{{ $user->active ? 'soft-emerald-background' : 'soft-alizarin-background' }}">
					<td><img class="circular" src="{{ $user->profile_picture }}" width=40 height=40 alt=""></td>
					<td>{{ $user->username }}</td>
					<td>{{ $user->display_name }}</td>
					<td>{{ $user->description }}</td>
				</tr>
				
			@endforeach
		</tbody>
	</table>

@endsection