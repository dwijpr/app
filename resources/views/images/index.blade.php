@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Index Images</h1>
            <hr>
            @if(count($objects) > 0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($objects as $i => $o)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $o->user->name() }}</td>
                            <td>{{ $o->name }}</td>
                            <td>
                                {{ Html::image(
                                    '/image/'.$o->id
                                    , $o->name
                                    , [
                                        'style' => 'max-width: 128px;'
                                            .'max-height: 128px;'
                                    ]
                                ) }}
                            </td>
                            <td>
                                <a
                                    href="{{ url('image/'.$o->id.'/edit') }}"
                                    class="no"
                                >
                                    <i class="fa fa-pencil"></i>
                                </a>
                                {{ Form::open([
                                    'url' => 'image/'.$o->id,
                                    'method' => 'DELETE',
                                    'style' => 'display: inline;'
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
                    @endforeach
                </tbody>
            </table>
            @endif
            <div>
                <a
                    href="{{ url('image/create') }}"
                    class="btn btn-primary"
                >
                    New
                </a>
            </div>
        </div>
    </div>
</div>
@endsection