<div class="row">
    @foreach($gpays as $pays)
        <div class="col-md-4 col-sm-6">
            <div class="well">
                <h3>
                    {{ $pays[0]->datetime->format('l') }}
                    <sup>
                        {{ $pays[0]->datetime->format('j') }}
                        <sup>
                            {{ $pays[0]->datetime->format('S') }}
                        </sup>
                    </sup>
                </h3>
                @foreach($pays as $p)
                <div class="pay-item">
                    {{ $p->item->name }}
                    ~
                    {{ $p->price }}
                    <div class="pull-right">
                        {{ Form::open([
                            'url' => '/home/'.$p->id,
                            'method' => 'PATCH',
                            'style' => 'display: inline;'
                        ]) }}
                            <input type="hidden" name="up" value="true">
                            <a
                                href="javascript:"
                                class="no"
                                onclick="confirmSubmit(this)"
                            >
                                <i class="fa fa-caret-up"></i>
                            </a>
                        {{ Form::close() }}
                        {{ Form::open([
                            'url' => '/home/'.$p->id,
                            'method' => 'PATCH',
                            'style' => 'display: inline;'
                        ]) }}
                            <input type="hidden" name="down" value="true">
                            <a
                                href="javascript:"
                                class="no"
                                onclick="confirmSubmit(this)"
                            >
                                <i class="fa fa-caret-down"></i>
                            </a>
                        {{ Form::close() }}
                        {{ Form::open([
                            'url' => '/home/'.$p->id,
                            'method' => 'DELETE',
                            'style' => 'display: inline;'
                        ]) }}
                            <a
                                href="javascript:"
                                class="no"
                                onclick="confirmSubmit(this)"
                            >
                                <i class="fa fa-remove"></i>
                            </a>
                        {{ Form::close() }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
