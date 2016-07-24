<style>
.img {
    opacity: .6;
    position: relative;
    padding: 0;
    border: 2px solid white;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
}
.img:hover {
    opacity: 1;
}
@media (min-width: 768px) {
    .img {
        border-width: 8px;
    }
    .add-image-container {
        padding-left: 8px;
        padding-right: 8px;
    }
}
@media (min-width: 992px) {
    .img {
        border-width: 16px;
    }
    .add-image-container {
        padding-left: 16px;
        padding-right: 16px;
    }
}
.img:before {
    content: "";
    display: block;
    padding-top: 100%;
}
.img div {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 1px solid #f4f4f4;
}
#cover-display {
    cursor: pointer;
}
#cover-display h4 {
    background: #ccc;
    padding: 8px 16px;
}
#cover-display img {
    max-width: 100%;
}
#cover-display:hover img {
    opacity: .5;
}
</style>

{{ Form::open([
    'url' => '/dart'.(@$dart?'/'.$dart->id:''),
    'method' => @$dart?'PATCH':'POST',
    'class' => 'form-horizontal',
]) }}
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-6">
            <div
                id="cover-display"
                data-toggle="modal"
                data-target="#myModal"
            >
                <h4 class="text-center">Add Cover</h4>
            </div>
        </div>
    </div>
    {{ Form::hidden('cover', @$dart->cover, ['id' => 'cover']) }}
    {{ Form::bsText('title', @$dart->title) }}
    {{ Form::bsTextarea('body', @$dart->body) }}
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-6">
            <button class="btn btn-primary">
                {{ @$dart?'Update':'Create' }}
            </button>
        </div>
    </div>
{{ Form::close() }}

<!-- Modal -->
<div
    class="modal fade"
    id="myModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="myModalLabel"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                ><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Choose an Image</h4>
            </div>
            <div class="modal-body">
                <div class="row" id="img-list"></div>
                <div class="text-center">
                    <b>
                        <a href="{{ url('/imgs/home') }}">Manage IMGs</a>
                    </b>
                </div>
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-default"
                    data-dismiss="modal"
                    id="img-picker-cancel"
                >Cancel</button>
            </div>
        </div>
    </div>
</div>

<div style="display: none;">
    <div
        class="col-xs-4 img"
        id="img-tpl"
    >
        <div></div>
    </div>
</div>

<script>
$(function() {
    function updateCover() {
        if (!$("#cover").val()) {
            return;
        }
        var img = $("<img>");
        img.attr('src', $("#cover").val()+'/sm');
        $("#cover-display").html(img);
        $("#myModal").modal('hide');
    }

    updateCover();

    $('#myModal').on('show.bs.modal', function (e) {
        $.get("{{ root_url('/imgs/api/'.Auth()->user()->id) }}", function(response) {
            $("#img-list").html('');
            if (!response.error && response.data.length) {
                for (var i = 0;i < response.data.length;i++) {
                    var img = $($("#img-tpl")[0]).clone(false).removeAttr('id');
                    var src = response.data[i].sm;
                    img.css('background-image', 'url({{ root_url() }}'+src+')');
                    $("#img-list").append(img);
                    img.data('src', response.data[i]._);
                }
            } else {
                $("#img-list").html(
                    $("<h2 class='text-center'>No Data Available</h2>")
                );
            }
            $('.img').each(function() {
                $(this).click(function() {
                    $("#cover").val($(this).data('src'));
                    updateCover();
                    refreshToken();
                });
            });
        });
    });
});
</script>
