<div class="row masonry-container">
    @foreach($gkeys as $key)
        <div class="col-xs-12 col-sm-12 col-md-4 col-sm-6 item">
            <div class="well">
                <h3>
                    {{ $gpays->get($key)[0]->datetime->format('l') }}
                    <sup>
                        {{ $gpays->get($key)[0]->datetime->format('j') }}
                        <sup>
                            {{ $gpays->get($key)[0]->datetime->format('S') }}
                        </sup>
                    </sup>
                    <div class="pull-right">
                        <span class="numeral-human">
                            {{ $gpays->get($key)->total }}
                        </span>
                    </div>
                </h3>
                <div class="pay-items">
                    @foreach($gpays->get($key) as $p)
                    <div class="s-row">
                        <div class="name s-cell" title="{{ $p->item->name }}">
                            <div class="truncate">
                                {{ $p->item->name }}
                            </div>
                        </div>
                        <div class="price s-cell numeral-human">
                            {{ $p->price }}
                        </div>
                        <div class="action s-cell">
                            <div class="wrapper">
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
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</div>
