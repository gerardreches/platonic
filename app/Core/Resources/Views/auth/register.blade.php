
@extends('core::master')

@section('head')
	@include('core::head')
	{{ Html::style('css/site.css') }}
@endsection

@section('body')
	
	<div id="login-background"></div>

	<div class="center-items">
		<div class="half-width-on-tablet one-fourth-width-on-desktop">
			<div class="panel">
				<div class="header">
					<div></div>
					<h4>Create an account</h4>
					<div></div>
				</div>
				<div class="panel-content right-aligned-text">
					<img src="" alt="">

					{!! Form::open(['route' => ['core::auth::register'], 'method' => 'post' ]) !!}

						<fieldset>
							@include('core::partials.forms.textinput', ['name' => 'username', 'placeholder' => 'Username'])
							@include('core::partials.forms.fielderror', ['name' => 'username'])
						</fieldset>

						<fieldset>
							@include('core::partials.forms.emailinput', ['name' => 'email', 'placeholder' => 'Email'])
							@include('core::partials.forms.fielderror', ['name' => 'email'])
						</fieldset>

						<fieldset>
							@include('core::partials.forms.passwordinput', ['name' => 'password', 'placeholder' => 'Password'])
							@include('core::partials.forms.fielderror', ['name' => 'password'])
						</fieldset>

						<fieldset>
							@include('core::partials.forms.passwordinput', ['name' => 'password_confirmation', 'placeholder' => 'Repeat password'])
							@include('core::partials.forms.fielderror', ['name' => 'password_confirmation'])
						</fieldset>

						<fieldset>
							{!! Form::submit('Register', ['class' => 'block-button']) !!}
						</fieldset>

					{!! Form::close() !!}
					
					<div class="right-aligned-text">
						<a href="{{ route('core::auth::getLogin') }}">Already have an account?</a>
						<br>
						<a href="{{ route('core::auth::getReset') }}">Forgot password?</a>
					</div>

					@include('core::common.errors')
				</div>
				
			</div>
		</div>
	</div>
	
@stop