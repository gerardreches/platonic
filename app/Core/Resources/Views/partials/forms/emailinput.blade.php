
{!! Form::email($name, isset($value) ? $value : null, ['placeholder' => isset($placeholder) ? $placeholder : '', 'class' => isset($class) ? $class : '' . $errors->has($name) ? ' has-error' : '']) !!}