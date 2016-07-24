@extends('layouts.app')

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
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <h3>{!! $dart->title() !!}</h3>
                    <hr>
                    {!! $dart->body() !!}
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
