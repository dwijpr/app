@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Home</h1>
            <hr>
            <p class="lead">
                You are logged in!
            </p>
            <div>
                <a href="{{ url('/dart') }}">
                    Dart
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
