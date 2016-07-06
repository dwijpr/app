{{ Form::open([
    'url' => 'image'.(@$object?'/'.$object->id:''),
    'method' => @$object?'PATCH':'POST',
    'class' => 'form-horizontal',
    'role' => 'form',
    'files' => true,
]) }}
    <div class="form-group{{ $errors->has('user_id')?' has-error':'' }}">
        {{ Form::label('user_id', @$label?:code_to_human_words('user_id'), [
            'class' => 'control-label col-sm-4',
            'for' => 'user_id',
        ]) }}
        <div class="col-sm-6">
            {{ Form::select(
                'user_id', os_to_kvs($users, 'email'), @$object->user->id, [
                    'class' => 'form-control'
                ]
            ) }}
            @if($errors->has('user_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('user_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('image')?' has-error':'' }}">
        {{ Form::label('image', @$label?:code_to_human_words('image'), [
            'class' => 'control-label col-sm-4',
            'for' => 'image',
        ]) }}
        <div class="col-sm-6">
            @if(@$object)
            {{ Html::image(
                '/image/'.$object->id
                , $object->name
                , ['style' => 'max-width: 256px; max-height: 256px;']
            ) }}
            @endif
            {{ Form::file('image', [
                'class' => 'form-control'
            ]) }}
            @if($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-6 col-sm-offset-4">
            <button class="btn btn-primary">
                {{ @$object?'Update':'Create' }}
            </button>
            <a href="{{ url('image') }}" class="btn btn-default">
                Cancel
            </a>
        </div>
    </div>
{{ Form::close() }}
