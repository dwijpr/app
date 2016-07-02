<div class="row">
    @foreach($gpays as $pays)
        <div class="col-md-4 col-sm-6">
            <div class="well">
                <h3>
                    {{ $pays[0]->datetime->format('Y-m-d') }}
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
