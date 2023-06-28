@extends('user-layout')
@section('title')
    Zmień awatar
@endsection
@section('btn1')
    active
@endsection
@section('footer_style')
    class="footer-absolute"
@endsection
@section('isFileUpload')
    <link rel="stylesheet" href="{{asset('styles/file-upload.css')}}">
@endsection
@section('isFileUploadJs')
    <script src="{{asset('js/file-upload.js')}}"></script>
@endsection

@section('acc-content')
    <livewire:upload-image-form />
@endsection
