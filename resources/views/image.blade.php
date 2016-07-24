@extends('layouts.app')

@section('style')
@parent
<style>
    .image-view-wrapper {
        padding-top: 16px;
    }
    .panel-body {
        padding: 0;
    }
    .panel-body img {
        max-width: 100%;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="image-view-wrapper">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {{ $image->name }}
                            <div class="pull-right">
                                {{ Form::open([
                                    'url' => $image->id,
                                    'method' => 'DELETE',
                                    'style' => 'display: inline;'
                                ]) }}
                                    <a
                                        href="javascript:"
                                        class="no"
                                        onclick="confirmSubmit(this)"
                                    >
                                        <i class="fa fa-trash"></i>
                                    </a>
                                {{ Form::close() }}
                            </div>
                        </h3>
                    </div>
                    <div class="panel-body text-center">
                        <img
                            src="{{ url($image->id) }}"
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection