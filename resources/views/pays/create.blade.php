@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="content">
                <h1>New Pay</h1>
                <hr>
                @include('pays.form')
            </div>
        </div>
    </div>
</div>
@endsection