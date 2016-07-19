@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Index Darts</h1>
            <hr>
            @if(count($darts) > 0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($darts as $i => $dart)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $dart->user->email }}</td>
                        <td>{{ $dart->title }}</td>
                        <td>{{ $dart->body }}</td>
                        <td>
                            <a
                                href="{{ url('/dart/'.$dart->id.'/edit') }}"
                                class="no"
                            >
                                <i class="fa fa-pencil"></i>
                            </a>
                            {{ Form::open([
                                'url' => '/dart/'.$dart->id,
                                'method' => 'DELETE',
                                'style' => 'display: inline;',
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
                    href="{{ url('/dart/create') }}"
                    class="btn btn-primary"
                >New</a>
            </div>
        </div>
    </div>
</div>
@endsection
