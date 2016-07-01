@extends('layouts.app')

@section('style')
@parent
<style>
    #the-basics > span.twitter-typeahead, .tt-menu.tt-open {
        width: 100%;
    }
    .tt-menu.tt-open {
        padding: 8px;
        background: black;
    }
</style>
@endsection

@section('head')
{{ Html::script(
    '/thirdparty/typeahead.js/0.11.1/dist/typeahead.jquery.js'
) }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="well">
                @include('home.form')
            </div>
            <div>
                <table class="table">
                    <tbody>
                    @foreach($pays as $p)
                        <tr>
                            <td>{{ $p->datetime }}</td>
                            <td>{{ $p->item->name }}</td>
                            <td>{{ $p->price }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
var substringMatcher = function(strs) {
    return function findMatches(q, cb) {
        var matches, substringRegex;
        matches = [];
        substrRegex = new RegExp(q, 'i');
        $.each(strs, function(i, str) {
            if (substrRegex.test(str)) {
                matches.push(str);
            }
        });

        cb(matches);
    };
};

var items = {!! json_encode(array_pluck($items, 'name')) !!};

$('#the-basics .typeahead').typeahead({
    hint: true,
    highlight: true,
    minLength: 1
},
{
    name: 'items',
    source: substringMatcher(items)
});
</script>
@endsection