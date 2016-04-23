
@extends('core::layouts.dashboard')


@section('head')

	@parent

@endsection


@section('content')
	
	<h1>Application Modules</h1>
	
	<div class="gap"></div>

	<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Version</th>
				<th>Author</th>
				<th>Description</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($modules as $module)
				<tr class="{{ $module['enabled'] ? 'soft-emerald-background' : 'soft-alizarin-background' }}">
					<td>{{ $module['name'] }}</td>
					<td>{{ $module['version'] }}</td>
					<td>{{ $module['author'] }}</td>
					<td>{{ $module['description'] }}</td>
					<td>
						@if($module['enabled'])
							<a href="">
								<button>Deactivate</button>
							</a>
						@else
							<a href="">
								<button>Activate</button>
							</a>
						@endif
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection