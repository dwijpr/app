@extends('layouts.app')

@section('_style')
<style>
.add-image-container {
    background: #efefef;
    padding: 32px 64px 8px;
    border-bottom: 1px solid #777;
}
.img {
    padding: 32px 8px;
    text-align: center;
}
.img-item {
    display: inline-block;
    margin: 0 auto;
    max-width: 100%;
    height: 128px;
}
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 add-image-container">
            <div>
                {{ Form::open([
                    'url' => '/home',
                    'class' => 'form-horizontal',
                    'role' => 'form',
                    'files' => true,
                ]) }}
                    <div class="form-group{{
                        $errors->has('image')?' has-error':''
                    }}">
                        <div class="col-sm-9">
                            {{ Form::file('image', [
                                'class' => 'form-control square'
                            ]) }}
                            @if($errors->has('image'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-primary full square">
                                {{ 'Add' }}
                            </button>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                @foreach($objects as $o)
                    <div class="col-md-3 col-sm-4 col-xs-2 img">
                        {{ Html::image('/image/'.$o->id, $o->name, [
                            'class' => 'img-item'
                        ]) }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
