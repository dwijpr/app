@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="content">
                <h1>New Image</h1>
                <hr>
                @include('images.form')
            </div>
        </div>
    </div>
</div>
@endsection