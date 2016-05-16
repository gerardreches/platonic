@if ($errors->has($name))
    <small class="alizarin-text-color">
        {{ $errors->first($name) }}
    </small>
@endif