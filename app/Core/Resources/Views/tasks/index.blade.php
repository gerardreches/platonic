
@extends('core::layouts.dashboard')


@section('head')

	@parent

@endsection


@section('content')
	
	<div class="fluid-grid">
		<div class="one-third-width"></div>
		<div class="one-third-width"></div>
		<div class="one-third-width">
			<div class="fluid-page">
				<h3>Tasks</h3>
				@include('core::common.errors')

				@if (!empty($tasks))
					
					<div class="checklist">
					
						@foreach ($tasks as $task)
							<label>
								{!! Form::checkbox('completed', 'true', $task->completed) !!}
								<span>{{ $task->name }}</span>
								{!! Form::open([ 'route' => ['dashboard::resume::destroy', 'task' => $task->id], 'method' => 'delete', 'class' => 'checklist-item-action' ]) !!}

									<button type="submit">
										<i class="fa fa-times-circle"></i>
									</button>

								{!! Form::close() !!}
							</label>
                        @endforeach

                    </div>

				@else
					<p>You haven't pending tasks.</p>
				@endif

				{!! Form::open([ 'route' => ['dashboard::resume::store'] ]) !!}

					{!! Form::text('name', null, ['placeholder' => 'New task...']) !!}

					<button class="success-button" type="submit">
						<i class="fa fa-plus"></i>
						Add Task
					</button>

				{!! Form::close() !!}

			</div>
		</div>

	</div>

@endsection