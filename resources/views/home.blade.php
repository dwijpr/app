@extends('layouts.app')

@section('style')
@parent
<style>
    .lead-text {
        display: block; /* Fallback for non-webkit */
        display: -webkit-box;
        height: 82px; /* Fallback for non-webkit */
        margin: 0 auto;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
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
        height: 128px;
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
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row masonry-container">
                @foreach($darts as $dart)
                <div
                    class="col-xs-12 col-sm-6 col-md-4 col-lg-4 dart-wrapper"
                >
                    <div
                        class="dart"
                        @if(@$dart->cover)
                        style="
                            padding-top: 128px;
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
                            {!! $dart->body() !!}
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
