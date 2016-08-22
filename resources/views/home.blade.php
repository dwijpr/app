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
    .dart {
        position: relative;
        border: 1px solid rgba(0, 0, 0, .1);
        border-radius: 4px;
        background: white;
        padding: 16px;
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
    /*.dart-cover {
        width: 100%;
        height: 156px;
    }*/
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
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-8">
                    <div class="row masonry-container">
                        @foreach($darts as $dart)
                        <div
                            class="col-xs-12 dart-wrapper"
                        >
                            <div
                                class="dart"
                            >
                                <div class="dart-header">
                                    <div class="cell cell-img">
                                        <div
                                            class="dart-user-img"
                                            style="background-image: url({{
                                                $dart->user->img('xs')
                                            }})"
                                        ></div>
                                    </div>
                                    <div class="cell">
                                        <div>
                                            {{ $dart->user->name() }}
                                            <span class="text-muted">in</span>
                                            Technology
                                        </div>
                                        <div class="text-muted">
                                            2 days ago
                                            <span class="middotDivider"></span>
                                            6 min read
                                        </div>
                                    </div>
                                </div>
                                @if(@$dart->cover)
                                <a href="#">
                                <img
                                    class="dart-img"
                                    src="{{ root_url(
                                        $dart->cover.'/md'
                                    ) }}"
                                >
                                </a>
                                @endif
                                <h3>
                                    <a href="#">
                                        {!! $dart->title() !!}
                                    </a>
                                </h3>
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
    </div>
</div>
@endsection
