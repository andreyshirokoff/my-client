@extends('user-layout')
@section('title')
    Zmień awatar
@endsection
@section('btn1')
    active
@endsection
@section('footer_style')
    style="position:absolute;bottom:0;left:0;width:100%"
@endsection

@section('acc-content')
    <livewire:upload-image-form />
@endsection
