@extends('layout')
@section('title')
    Przywróć dostęp
@endsection
@section('isLogin')
    <link rel="stylesheet" href="{{asset('styles/login.css')}}">
@endsection
@section('footer_style')
    style="position:absolute;bottom:0;left:0;width:100%"
@endsection
@section('content')
    <div class="container-fluid px-0">
        <div class="container-fluid header-container p-0">
            @include('components/header')
        </div>
        <div class="container mb-5">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form class="authorization-form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="inner-container">
                    <p class="text-center fs-2 fw-bold">Przywróć dostęp</p>
                    <div class="mt-3">
                        <label class="form-label" for="tel">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="example@gmail.com" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark w-100 mt-4 py-4 fs-5 rounded-pill">Wyślij link do resetowania</button>
                    <button type="button" id="return-btn" class="btn border border-dark btn-transparent w-100 mt-4 py-4 fs-5 rounded-pill">Powrót</button>
                </div>
            </form>
        </div>
    </div>
    @include('components/footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script>
        $('#return-btn').click(() => {
            window.location.href = '/login';
        })
    </script>
@endsection
