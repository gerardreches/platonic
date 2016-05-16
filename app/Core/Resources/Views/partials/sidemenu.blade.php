
<div class="side-menu">

	<div class="header alizarin-background">
		<img src="{{ asset('platonic-isotipo.png') }}" alt="">
		<img src="{{ asset('platonic-logotipo.png') }}" alt="" style="padding-left: 0.5rem">
	</div>
	
	<div class="gap"></div>

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