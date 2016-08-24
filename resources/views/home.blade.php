@extends('layouts.app')

@section('style')
@parent
<style>
    body {
        background: #fafafa;
    }

    .navbar-default {
        background: white;
    }
    .dart-wrapper {
        padding: 8px;
    }
    .main-container .dart {
        position: relative;
        border: 1px solid rgba(0, 0, 0, .1);
        border-radius: 4px;
        background: white;
        padding: 16px;
    }
    .side .dart {
        padding-bottom: 16px;
        font-weight: 300;
    }
    .dart-cover, .dart-user-img {
        position: absolute;
        top: 0;
        left: 0;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: 50% 50%;
        background-repeat: no-repeat;
    }
    .dart-user-img {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        top: 4px;
    }
    .dart-header {
        display: table;
    }
    .dart-header .cell {
        display: table-cell;
    }
    .cell.cell-img {
        position: relative;
        width: 48px;
    }
    .dart-header img {
        width: 48px;
    }

    .middotDivider {
        padding-right: .45em;
        padding-left: .45em;
    }
    .middotDivider::after {
        content: "·";
    }

    .dart-img {
        max-height: 186px;
        max-width: 100%;
    }

    .group-side {
        padding-bottom: 16px;
    }
    .invitation, .invitation h4 {
        font-weight: 300;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-8">
                    @include('home.main')
                </div>
                <div class="col-md-4">
                    @include('home.side')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
