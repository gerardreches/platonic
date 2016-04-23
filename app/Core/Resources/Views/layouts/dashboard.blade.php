
@extends('core::master')


@section('head')

	@include('core::head')

	<!-- We don't wont dashboard pages to be indexed in search engines. -->
	<meta name="robots" content="noindex">

@endsection


@section('body')

	@include('core::partials.sidemenu')

	<div class="fluid-container has-side-menu">

		<div class="header pomegranate-background">
			
			

			<div class="header-item">
				<img src="https://pbs.twimg.com/profile_images/654373248776425472/SyXJajE5.jpg" alt="">
				<span>Welcome back!</span>
			</div>
			
		</div>

		<div class="fluid-page">
			@yield('content')
		</div>
		
	</div>

@endsection