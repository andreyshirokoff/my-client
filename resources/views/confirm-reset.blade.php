@extends('layout')
@section('title')
    Odzyskiwanie hasła
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
            <form action="" class="authorization-form">
                <div class="inner-container">
                    <p class="text-center fs-2 fw-bold">Odzyskiwanie hasła</p>
                    <div class="mt-3">
                        <label class="form-label" for="email">Wprowadź swój hasło</label>
                        <input type="password" class="form-control" name="email" id="email" placeholder="**********">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="email">Potwierdź hasło</label>
                        <input type="password" class="form-control" name="email" id="email" placeholder="**********">
                    </div>
                    <button type="submit" class="btn btn-dark w-100 mt-4 py-4 fs-5 rounded-pill">Potwierdzać</button>
                    <button type="submit" class="btn border border-dark btn-transparent w-100 mt-4 py-4 fs-5 rounded-pill">Anulowanie</button>
                </div>
            </form>
        </div>
    </div>
    @include('components/footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="{{asset('js/main.js')}}}"></script>
@endsection
