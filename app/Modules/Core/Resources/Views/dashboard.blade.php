@extends('layouts.main')

@section('content')

<div class="side-menu">

	<div class="header">
		Platonic
	</div>

	<ul>
		@foreach(DashboardMenu::getItems() as $item)
			<li>
				<a href="{{ $item->getRoute() }}">
					<i class="{{ $item->getIcon() }}"></i>
					<span>{{ $item->getTitle() }}</span>
				</a>
			</li>
		@endforeach
	</ul>

</div>

@endsection