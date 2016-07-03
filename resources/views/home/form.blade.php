{!! Form::open([
    'url' => 'home',
    'class' => 'form-horizontal add-pay-form',
    'role' => 'form',
]) !!}
    <div class="form-group">
        <div class="
            col-sm-12
            {{ $errors->has('item')?' has-error':'' }}"
        >
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
        <div class="
            col-sm-12
            {{ $errors->has('price')?' has-error':'' }}"
        >
            <div>
                {{ Form::text('price', null, [
                    'class' => 'form-control text-right numeral',
                    'placeholder' => '0',
                    'autocomplete' => 'off',
                ]) }}
                @if($errors->has('price'))
                    <span class="help-block">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="
            col-sm-12
            {{ $errors->has('datetime')?' has-error':'' }}"
        >
            <div>
                {{ Form::text('datetime', date('Y-m-d'), [
                    'class' => 'form-control text-center datepicker',
                    'placeholder' => 'Paid Date & Time',
                    'autocomplete' => 'off',
                ]) }}
                @if($errors->has('datetime'))
                    <span class="help-block">
                        <strong>{{ $errors->first('datetime') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-sm-12">
            <button class="btn btn-primary" style="width: 100%;">
                {{ 'Add' }}
            </button>
        </div>
    </div>
{!! Form::close() !!}
