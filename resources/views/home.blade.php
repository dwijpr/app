@extends('layouts.app')

@section('style')
@parent
<style>
    .dart-wrapper {
        padding: 8px;
    }
    .dart {
        position: relative;
        border: 1px solid rgba(0, 0, 0, .1);
        padding: 16px;
    }
    .dart-cover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 156px;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: 50% 50%;
        background-repeat: no-repeat;
    }
</style>
@endsection

@section('head')
{{ r_script(
    '/thirdparty/masonry/4.1.0/dist/masonry.pkgd.js'
) }}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row masonry-container" style="max-width: 100%;">
                @foreach($darts as $dart)
                <div
                    class="col-xs-12 col-sm-6 col-md-4 col-lg-3 dart-wrapper"
                >
                    <div
                        class="dart"
                        @if(@$dart->cover)
                        style="
                            padding-top: 156px;
                        "
                        @endif
                    >
                        @if(@$dart->cover)
                        <div
                            class="dart-cover"
                            style="
                                background-image: url({{ root_url(
                                    $dart->cover.'/md'
                                ) }});
                            "
                        ></div>
                        @endif
                        <h3 class="text-center">{!! $dart->title() !!}</h3>
                        <hr>
                        <div class="lead-text">
                            {!! $dart->bodyFirstP() !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
$(function() {
    if ($('.masonry-container').length > 0) {
        var msnry = new Masonry('.masonry-container');
    }
});
</script>
@endsection
