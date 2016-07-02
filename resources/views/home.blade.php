@extends('layouts.app')

@section('style')
@parent
<style>
    #the-basics > span.twitter-typeahead, .tt-menu.tt-open {
        width: 100%;
    }
    .tt-menu.tt-open {
        padding: 8px;
        background: {{ config('dark')?'#333':'#ddd' }};
    }
    .tt-suggestion {
        color: {{ config('dark')?'#ddd':'#333' }};
    }
    .tt-suggestion .tt-highlight{
        color: {{ config('dark')?'#fff':'#111' }};
    }
    .pay-item .pull-right {
        display: none;
    }
    .pay-item:hover {
        color: #000;
    }
    .pay-item:hover .pull-right {
        display: block;
    }

    form .form-control {
        border-radius: 0;
    }
    form .btn {
        border-radius: 0;
    }
</style>
@endsection

@section('head')
{{ Html::style(
    '/thirdparty/jquery-ui/1.11.4/jquery-ui.css'
) }}

{{ Html::script(
    '/thirdparty/typeahead.js/0.11.1/dist/typeahead.jquery.js'
) }}
{{ Html::script(
    '/thirdparty/Numeral-js/1.5.3/numeral.js'
) }}
{{ Html::script(
    '/thirdparty/jquery-ui/1.11.4/jquery-ui.js'
) }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                @include('home.form')
            </div>
            <div>
                @include('home.list')
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

function numeralFormat(el) {
    var val = $(el).val();
    $(el).val(numeral(val).format('0,0'));
}
$(".numeral").each(function() {
    numeralFormat(this);
});
$(".numeral").keyup(function() {
    numeralFormat(this);
});
$("#add-pay").submit(function() {
    $(".numeral").each(function() {
        var unformat = numeral().unformat($(this).val());
        $(this).val(unformat);
    });
});

$(function() {
    $( ".datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd'
    });
});
</script>
@endsection