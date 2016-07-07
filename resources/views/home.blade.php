@extends('layouts.app')

@section('_style')
<style>
body {
    background: #f4f4f4;
}
.add-image-container {
    background: #efefef;
    padding: 32px 64px 8px;
    border-bottom: 1px solid #777;
}
.img {
    padding: 32px 8px;
    height: 156px;
}
.img table {
    width: 100%;
}
.img table td {
    text-align: center;
    vertical-align: middle;
    height: 156px;
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
</style>
@endsection

@section('content')
@include('home.content')
@endsection
