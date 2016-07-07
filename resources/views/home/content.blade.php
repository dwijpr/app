<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 add-image-container">
            <div>
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
        </div>
        <div class="col-md-12">
            <div class="row">
                @foreach($objects as $o)
                    <div class="col-md-3 col-sm-4 col-xs-6 img">
                        <table>
                            <tr>
                                <td>
                                    {{ Html::image(
                                        '/'.$o->id.'/sm', $o->name, [
                                            'class' => 'img-item'
                                        ]
                                    ) }}
                                    {{ Form::open([
                                        'url' => $o->id,
                                        'method' => 'DELETE',
                                        'class' => 'img-delete'
                                    ]) }}
                                        <a
                                            href="javascript:"
                                            class="no"
                                            onclick="confirmSubmit(this)"
                                        >
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
