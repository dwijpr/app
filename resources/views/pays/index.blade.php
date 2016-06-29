@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Index Pays</h1>
            <hr>
            @if(count($objects) > 0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Item</th>
                        <th>Price</th>
                        <th>At</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($objects as $i => $o)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $o->user->email }}</td>
                            <td>{{ $o->item->name }}</td>
                            <td>{{ $o->price }}</td>
                            <td>{{ $o->datetime }}</td>
                            <td>
                                <a
                                    href="{{ url('pay/'.$o->id.'/edit') }}"
                                    class="no"
                                >
                                    <i class="fa fa-pencil"></i>
                                </a>
                                {{ Form::open([
                                    'url' => 'pay/'.$o->id,
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
                    href="{{ url('pay/create') }}"
                    class="btn btn-primary"
                >
                    New
                </a>
            </div>
        </div>
    </div>
</div>
@endsection