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
                    <div>
                        <div>
                            {{ $p->item->name }}
                            ~
                            {{ $p->price }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
