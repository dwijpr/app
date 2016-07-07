@extends('layouts.app')

@section('_style')
<style>
.add-image-container {
    padding: 16px 2px;
}
.add-image-container .form-wrapper {
    padding: 0 64px;
}
.add-image-container hr{
    border-color: #f4f4f4;
}
.img {
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

/*
.img table {
    width: 100%;
}
.img table td {
    text-align: center;
    vertical-align: middle;
    padding: 0;
}
.img-item {
    display: inline-block;
    margin: 0 auto;
    max-width: 100%;
    max-height: 128px;
    border: 1px solid #bbb;
    opacity: .7;
}
.img:hover .img-item {
    opacity: 1;
}
.img-delete {
    display: none;
    position: absolute;
}
.img table td:hover .img-delete {
    display: inline;
}
*/
</style>
@endsection

@section('content')
@include('home.content')
@endsection
