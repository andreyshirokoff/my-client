@extends('layout')
@section('title')
    Czy jesteś już zarejestrowany?
@endsection
@section('isLogin')
    <link rel="stylesheet" href="{{asset('styles/login.css')}}">
@endsection

@section('content')
    <div class="container-fluid px-0">
        <div class="container-fluid header-container p-0">
            @include('components/header')
        </div>
        <div class="container mb-5">
            <p class="text-end fs-5 pe-2">Czy jesteś już zarejestrowany? <a href="" class="text-dark fw-semibold">Wejść</a></p>
            <form action="" class="authorization-form">
                <div class="inner-container">
                    <p class="text-center fs-2 fw-bold">Rejestracja</p>
                    <p class="text-center fs-5 fw-semibold">Rozpocznij okres próbny już teraz!</p>
                    <div class="mt-3">
                        <label class="form-label" for="name">Wpisz swoje imię</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Константин">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="email">Wprowadź swój email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Example@gmail.com">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="tel">Wprowadź swój numer telefonu</label>
                        <input type="tel" class="form-control" name="tel" id="tel" placeholder="+48 456 56 56">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="email">Wprowadź swój hasło</label>
                        <input type="password" class="form-control" name="email" id="email" placeholder="**********">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="email">Potwierdź hasło</label>
                        <input type="password" class="form-control" name="email" id="email" placeholder="**********">
                    </div>
                    <button type="submit" class="btn btn-dark w-100 mt-4 py-4 fs-5 rounded-pill">Zarejestrować</button>
                </div>
            </form>
        </div>
    </div>
    @include('components/footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="{{asset('js/main.js')}}"></script>
@endsection
