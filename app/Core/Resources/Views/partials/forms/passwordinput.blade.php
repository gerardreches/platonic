
{!! Form::password($name, ['placeholder' => isset($placeholder) ? $placeholder : '', 'class' => isset($class) ? $class : '' . $errors->has($name) ? ' has-error' : '']) !!}