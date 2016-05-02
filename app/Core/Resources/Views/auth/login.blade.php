
@extends('core::master')

@section('head')
	@include('core::head')
	{{ Html::style('css/site.css') }}
@endsection

@section('body')
	
	<div id="login-background"></div>

	<div class="center-items">
		<div class="one-fourth-width">
			<div class="panel centered-text">
				<div class="header">
					<div class="half-width"><h3>Login</h3></div>
					<div class="half-width"><h3>Register</h3></div>
				</div>
				
				{!! Form::open(['route' => ['core::auth::login'], 'method' => 'post' ]) !!}
					{!! Form::text('email', null, ['placeholder' => 'Email']) !!}
					{!! Form::password('password', ['placeholder' => 'Password']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
	
@stop