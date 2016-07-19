@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Edit Dart</h1>
            <hr>
            @include('dart.form')
        </div>
    </div>
</div>
@endsection