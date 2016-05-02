
{!! Form::open(['route' => ['blog::posts::store'] ]) !!}

{!! Form::label('published_at', 'Publish on:', []) !!}
{!! Form::date('published_at', \Carbon\Carbon\::now(), []) !!}

{!! Form::close() !!}