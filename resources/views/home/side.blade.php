<div class="group-side">
    <h4>Editor's pick</h4>
    <p>
        Stories worth talking about.
    </p>
    <hr>
    <div class="side">
        <?php
        $count = 0;
        ?>
        @foreach($darts as $dart)
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
                            {!! $dart->title() !!}
                        </div>
                        <div class="text-muted">
                            {{ $dart->user->name() }}
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $count++;
            if ($count > 2) {
                break;
            }
            ?>
        @endforeach
    </div>
</div>
<div class="invitation">
    <div>
        <h4>
            Make Aqsa yours
            <div class="pull-right">
                <i class="fa fa-close"></i>
            </div>
        </h4>
        <hr>
        <p>
            Anyone can write on Aqsa.
        </p>
        <a href="#" class="btn btn-default">
            Start Writing
        </a>
    </div>
</div>
