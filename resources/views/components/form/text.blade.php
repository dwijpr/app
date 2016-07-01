<div class="form-group{{ $errors->has($name)?' has-error':'' }}">
    {{ Form::label($name, @$label?:code_to_human_words($name), [
        'class' => 'control-label col-sm-'.$cols['label'],
        'for' => $name,
    ]) }}
    <div class="col-sm-{{ $cols['input'] }}">
        {{ Form::text($name, $value, array_merge([
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
