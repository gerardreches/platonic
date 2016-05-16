
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
				<div class="header-item">
					<img class="circular" src="{{ Auth::user()->profile_picture }}" alt="">
					<span>Welcome {{ Auth::user()->username }}!</span>
				</div>
				
			</div>

			<div class="fluid-page">
				@yield('content')
			</div>
			
		</div>

	</div>

@endsection