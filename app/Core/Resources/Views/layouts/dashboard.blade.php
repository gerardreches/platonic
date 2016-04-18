
@extends('core::master')


@section('head')

	@include('core::head')

	<!-- We don't wont dashboard pages to be indexed in search engines. -->
	<meta name="robots" content="noindex">

@endsection


@section('body')

	@include('core::partials.sidemenu')

	<div class="fluid-container has-side-menu">

		<div class="header">
			<div>
				<img src="" alt="">
			</div>
		</div>

		<div class="fluid-page">
			@yield('content')
		</div>
		
	</div>

@endsection