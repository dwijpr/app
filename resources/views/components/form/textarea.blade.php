<div class="form-group{{ $errors->has($name)?' has-error':'' }}">
    {{ Form::label($name, @$label?:snake_to_human($name), [
        'class' => 'control-label col-sm-4',
        'for' => $name,
    ]) }}
    <div class="col-sm-6">
        {{ Form::textarea($name, $value, array_merge([
            'class' => 'form-control',
            'id' => $name,
        ]), $attributes) }}
        @if($errors->has($name))
            <span class="help-block">
                <strong>{{ $errors->first($name) }}</strong>
            </span>
        @endif
    </div>
</div>
