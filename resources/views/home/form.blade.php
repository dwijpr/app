{!! Form::open([
    'url' => 'home',
    'class' => 'form-horizontal',
    'role' => 'form',
]) !!}
    <div class="form-group">
        <div class="col-md-5{{ $errors->has('item')?' has-error':'' }}">
            <div id="the-basics">
                {{ Form::text('item', null, [
                    'class' => 'form-control typeahead',
                    'placeholder' => 'Name thing to be Paid'
                ]) }}
                @if($errors->has('item'))
                    <span class="help-block">
                        <strong>{{ $errors->first('item') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-2{{ $errors->has('price')?' has-error':'' }}">
            <div>
                {{ Form::text('price', null, [
                    'class' => 'form-control text-right',
                    'placeholder' => '1.000.000',
                ]) }}
                @if($errors->has('price'))
                    <span class="help-block">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-3{{ $errors->has('datetime')?' has-error':'' }}">
            <div>
                {{ Form::text('datetime', date('Y-m-d h:i:s'), [
                    'class' => 'form-control text-center',
                    'placeholder' => 'Paid Date & Time'
                ]) }}
                @if($errors->has('datetime'))
                    <span class="help-block">
                        <strong>{{ $errors->first('datetime') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary" style="width: 100%;">
                {{ 'Add' }}
            </button>
        </div>
    </div>
{!! Form::close() !!}
