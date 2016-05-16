
@extends('core::master')

@section('head')
	@include('core::head')
	{{ Html::style('css/site.css') }}
@endsection

@section('body')
	
	<div id="login-background"></div>

	<div class="center-items">
		<div class="full-width half-width-on-phablet one-fourth-width-on-desktop">
			<div class="panel">
				<div class="panel-content">
					<h2 class="centered-text">Welcome!</h2>
					<div class="gap"></div>

					{!! Form::open(['route' => ['core::auth::login'], 'method' => 'post' ]) !!}

						<fieldset>
							<div class="input-group">
								<div class="input-extra"><i class="fa fa-fw fa-user"></i></div>
								@include('core::partials.forms.emailinput', ['name' => 'email', 'placeholder' => 'Email'])
							</div>
							@include('core::partials.forms.fielderror', ['name' => 'email'])
						</fieldset>
						
						<fieldset>
							<div class="input-group">
								<div class="input-extra"><i class="fa fa-fw fa-key"></i></div>
								@include('core::partials.forms.passwordinput', ['name' => 'password', 'placeholder' => 'Password'])
							</div>
							@include('core::partials.forms.fielderror', ['name' => 'password'])
						</fieldset>

						<fieldset>
							{!! Form::submit('Log in', ['class' => 'block-button']) !!}
						</fieldset>

					{!! Form::close() !!}

					<div class="right-aligned-text">
						<a href="{{ route('core::auth::getReset') }}">Forgot password?</a>
						<br>
						<a href="{{ route('core::auth::getRegister') }}">Don't have an account?</a>
					</div>

				</div>
				
			</div>
		</div>
	</div>
	
@stop