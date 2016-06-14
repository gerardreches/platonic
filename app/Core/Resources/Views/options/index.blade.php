
@extends('core::layouts.dashboard')

@section('content')
	
	<h1>Settings</h1>
	
	<div class="gap"></div>

	<div class="tabbed-container">
		<nav>
			<ul>
				@foreach ($groups as $group)
					<li>
						<i class="fa fa-cog fa-lg"></i>
						<span>{{ $group->name }}</span>
					</li>
				@endforeach
			</ul>
		</nav>
		@foreach ($groups as $group)
			<section>
				<div class="grid">
					{!! Form::open(['route' => 'dashboard::options::update', 'method' => 'put']) !!}
						@foreach ($group->options as $option)
							<fieldset>
								<label for="options[{{ $option->name }}][value]">{{ $option->label }}</label>
								{!! Form::text('options['.$option->name.'][value]', $option->value, []) !!}
								<small>{!! $option->description !!}</small>
							</fieldset>
						@endforeach
						{!! Form::submit("Save", ['class' => 'button']) !!}
					{!! Form::close() !!}
				</div>
			</section>
		@endforeach
	</div>

@endsection