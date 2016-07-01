{!! Form::open([
    'url' => 'home',
    'class' => 'form-horizontal',
    'role' => 'form',
]) !!}
    <div class="form-group{{ $errors->has('item')?' has-error':'' }}">
        {{ Form::label('item', 'Item', [
            'class' => 'control-label col-sm-4',
            'for' => 'item',
        ]) }}
        <div class="col-sm-6" id="the-basics">
            {{ Form::text('item', null, [
                'class' => 'form-control typeahead',
                'id' => 'item',
            ]) }}
            @if($errors->has('item'))
                <span class="help-block">
                    <strong>{{ $errors->first('item') }}</strong>
                </span>
            @endif
        </div>
    </div>
    {{ Form::bsText(
        'price'
    ) }}
    {{ Form::bsText(
        'datetime', date('Y-m-d h:i:s')
    ) }}
    <div class="form-group">
        <div class="col-sm-6 col-sm-offset-4">
            <button class="btn btn-primary">
                {{ @$object?'Update':'Create' }}
            </button>
            <a href="{{ url('pay') }}" class="btn btn-default">
                Cancel
            </a>
        </div>
    </div>
{!! Form::close() !!}
