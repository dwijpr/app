<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-12 add-image-container">
                    <div class="form-wrapper">
                        {{ Form::open([
                            'url' => '/home',
                            'class' => 'form-horizontal',
                            'role' => 'form',
                            'files' => true,
                        ]) }}
                            <div class="form-group{{
                                $errors->has('image')?' has-error':''
                            }}">
                                <div class="col-sm-9">
                                    {{ Form::file('image', [
                                        'class' => 'form-control square'
                                    ]) }}
                                    @if($errors->has('image'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('image') }}
                                            </strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-sm-3">
                                    <button class="btn btn-primary full square">
                                        {{ 'Add' }}
                                    </button>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                    <hr>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        @foreach($objects as $o)
                            <div
                                class="col-xs-4 img"
                                style="
                                    background-image:
                                        url({{url($o->id.'/md')}});
                                "
                            >
                                <div></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
