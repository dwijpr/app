@extends('layouts.app')

@section('style')
@parent
<style>
    #the-basics > span.twitter-typeahead, .tt-menu.tt-open {
        width: 100%;
    }
    .tt-menu.tt-open {
        padding: 8px;
        background: {{ config('app.dark')?'#333':'#ddd' }};
    }
    .tt-suggestion {
        color: {{ config('app.dark')?'#ddd':'#333' }};
    }
    .tt-suggestion .tt-highlight{
        color: {{ config('app.dark')?'#fff':'#111' }};
    }

    form .form-control {
        border-radius: 0;
    }
    form .btn {
        border-radius: 0;
    }

    div.pay-items {
        width: 100%;
    }
    div.pay-items .s-row:hover .s-cell {
        color: black;
        font-weight: bold;
    }
    div.pay-items .s-row:hover .action {
        display: inline-block;
    }
    div.pay-items .s-cell {
        display: inline-block;
    }
    div.pay-items .name {
        width: 45%;
    }
    div.pay-items .price {
        width: 18%;
        text-align: right;
    }
    div.pay-items .action {
        width: 30%;
        text-align: right;
        display: none;
    }

    .masonry-container {
        max-width: 100%;
    }
    .well.pay-group {
        padding: 12px;
    }
    .block-info {
        background: {{ config('app.dark')?'#333':'#ccc' }};
        padding-bottom: 64px;
    }
    @media (min-width: 992px) {
        .block-info {
            height: 100%;
            overflow: auto;
        }
    }

    .add-pay-col {
        background: #ccc;
    }
    .add-pay {
        padding: 24px;
        padding-bottom: 16px;
    }

    .pay-main {
        padding-top: 16px;
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
{{ Html::script(
    '/thirdparty/masonry/4.1.0/dist/masonry.pkgd.js'
) }}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div
            class="
                col-sm-12 col-md-3 block-info visible-xs-block visible-sm-block
            "
        >
            @include('home.info')
        </div>
        <div
            class="col-md-3 block-info affix visible-md-block visible-lg-block"
            style="overflow: auto;"
        >
            @include('home.info')
        </div>
        <div class="col-sm-offset-0 col-sm-12 col-md-offset-3 col-md-9">
            @include($view_path)
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

$(".add-pay-form").submit(function() {
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

$(function() {
    if ($('.masonry-container').length > 0) {
        var msnry = new Masonry( '.masonry-container', {
        // options
        });
    }
});

$(function() {
    $(".numeral-read").each(function() {
        var el = this;
        $(this).html(numeral(
            $(el).html()
        ).format('0,0'));
    });
    $(".numeral-human").each(function() {
        var el = this;
        $(this).html(numeral(
            $(el).html()
        ).format('0.0a'));
    });
});
</script>
@endsection