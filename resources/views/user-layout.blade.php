@extends('layout')
@section('isLogin')
    <link rel="stylesheet" href="{{asset('styles/login.css')}}">
@endsection
@section('isPersonal')
    <link rel="stylesheet" href="{{asset('styles/personal.css')}}">
@endsection
@section('content')
    <div class="container-fluid px-0" @guest style="position: relative;z-index: 100;" @else @endguest>
        <div class="container-fluid header-container p-0">
            @include('components/header')
        </div>
    </div>

    <div class="container mb-5">
        <p class="fs-2 fw-bold text-center mb-4">@yield('title')</p>
        <div class="row row-gap-4">
            <div class="col-12 col-sm-4">
                <div class="left-nav">
                    <div class="border border-dark d-flex align-items-center justify-content-center nav-links @yield('btn1')">
                        <p class="text-center mb-0" style="width:100%"><a href="{{url('/home')}}" class="fw-semibold fs-5 text-decoration-none" style="display:block;">Twoje
                                konto</a></p>
                    </div>
                    <div class="border border-dark d-flex align-items-center justify-content-center nav-links @yield('btn2')">
                        <p class="text-center mb-0" style="width:100%"><a href="{{url('/home/packet-change')}}" class="fw-semibold fs-5 text-decoration-none" style="display:block;">Zmień pakiet</a></p>
                    </div>
                    <div class="border border-dark d-flex align-items-center justify-content-center nav-links @yield('btn3')">
                        <p class="text-center mb-0" style="width:100%"><a href="{{url('/home/sms-packets')}}" class="fw-semibold fs-5 text-decoration-none" style="display:block;">Pakiet SMS</a></p>
                    </div>
                    <div class="border border-dark d-flex align-items-center justify-content-center nav-links @yield('btn4')">
                        <p class="text-center mb-0" style="width:100%"><a href="{{url('/home/help-page')}}" class="fw-semibold fs-5 text-decoration-none" style="display:block;">Pomoc techniczna</a></p>
                    </div>
                    <div class="border border-dark d-flex align-items-center justify-content-center nav-links @yield('btn5')">
                        <p class="text-center mb-0" style="width:100%"><a href="{{url('/home/info-page')}}" class="fw-semibold fs-5 text-decoration-none" style="display:block;">Baza wiedzy</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-8">
                @yield('acc-content')
            </div>
        </div>
    </div>

    @include('components/footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
{{--<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://kit.fontawesome.com/b675a8d36a.js" crossorigin="anonymous"></script>
    @yield('isFileUploadJs')
@endsection
