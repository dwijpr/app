<div class="row main-container">
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
