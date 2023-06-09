@extends('layout')
@section('title')
    Wejście
@endsection
@section('isLogin')
    <link rel="stylesheet" href="{{asset('styles/login.css')}}">
@endsection
@section('content')
    <div class="container-fluid px-0">
        <div class="container-fluid header-container p-0">
            @include('components/header')
        </div>
        <div class="container">
            <p class="text-end fs-5 pe-2">Czy jesteś już zarejestrowany? <a href="" class="text-dark fw-semibold">Wejść</a></p>
            <form action="" class="authorization-form">
                <div class="inner-container">
                    <p class="text-center fs-2 fw-bold">Wejście</p>
                    <div class="mt-3">
                        <label class="form-label" for="email">Wprowadź swój email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Example@gmail.com">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="email">Hasło</label>
                        <input type="password" class="form-control" name="email" id="email" placeholder="**********">
                    </div>
                    <button type="submit" class="btn btn-dark w-100 mt-4 py-4 fs-5 rounded-pill">zarejestrować</button>
                </div>
            </form>
            <p class="fs-5 text-center">
                Zapomniałeś hasła? <a href="" class="fw-bold text-dark">Przywróć</a>
            </p>
        </div>
    </div>
    @include('components/footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="{{asset('js/main.js')}}}"></script>
@endsection
