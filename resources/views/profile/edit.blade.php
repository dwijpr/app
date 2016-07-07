@extends('layouts.app')

@section('head')
{{ Html::style(
    '/thirdparty/jquery-ui/1.11.4/jquery-ui.css'
) }}

{{ Html::script(
    '/thirdparty/jquery-ui/1.11.4/jquery-ui.js'
) }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="content">
                <h1>Edit Profile</h1>
                <hr>
                @include('profile.form')
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
$(function() {
    $( ".datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:+0"
    });
});
</script>
@endsection