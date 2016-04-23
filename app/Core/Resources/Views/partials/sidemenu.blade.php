
<div class="side-menu">

	<div class="header">
		Platonic
	</div>

	<ul>
		@foreach(DashboardMenu::getItems() as $item)
			<li class="{{ is_current_route($item->getRoute()) ? 'active' : ''}}" >
				<a href="{{ $item->getRoute() }}">
					<i class="{{ $item->getIcon() }}"></i>
					<span>{{ $item->getTitle() }}</span>
				</a>
			</li>
		@endforeach
	</ul>

</div>