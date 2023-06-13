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
            <form class="authorization-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="inner-container">
                    <p class="text-center fs-2 fw-bold">Wejście</p>
                    <div class="mt-3">
                        <label class="form-label" for="email">Wprowadź swój email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Example@gmail.com" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="password">Hasło</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="**********" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark w-100 mt-4 py-4 fs-5 rounded-pill">zarejestrować</button>
                </div>
            </form>
            @if (Route::has('password.request'))
                <p class="fs-5 text-center">
                    Zapomniałeś hasła? <a href="{{ route('password.request') }}" class="fw-bold text-dark">Przywróć</a>
                </p>
            @endif
            <p class="fs-5 text-center">
                <a href="{{ route('register') }}" class="fw-bold text-dark">Rejestracja</a>
            </p>
        </div>
    </div>
    @include('components/footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="{{asset('js/main.js')}}"></script>
@endsection
