
@extends('core::master')


@section('head')

	@include('core::head')

	<!-- We don't wont dashboard pages to be indexed in search engines. -->
	<meta name="robots" content="noindex">

@endsection


@section('body')
	
	<div class="side-menu-layout">

		@include('core::partials.sidemenu')

		<div class="layout-content clouds-background">

			<div class="header pomegranate-background shadowed white-text-color">
				
				<div class="header-item"></div>
				<div class="header-item"></div>
				<div class="header-dropdown">

					<img class="item circular-image" src="{{ Auth::user()->profile_picture }}" alt="">
					<span class="item">Welcome {{ Auth::user()->username }}!</span>
					<i class="item fa fa-caret-down"></i>
					
					<!-- Auth user menu -->
					<ul>
						<li>
							<a href="{{ route('dashboard::users::edit', ['id'=> Auth::user()->id]) }}">
								<i class="fa fa-pencil"></i>
								<span>Edit profile</span>
							</a>
						</li>
						<li>
							<a href="{{ route('core::auth::logout') }}">
								<i class="fa fa-sign-out"></i>
								<span>Logout</span>
							</a>
						</li>
					</ul>
					
				</div>
				
			</div>

			<div class="fluid-page">
				@yield('content')
			</div>
			
		</div>

	</div>

@endsection