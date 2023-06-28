@extends('layout')
@section('title')
    Obszar osobisty
@endsection
@section('btn1')
    active
@endsection
@section('footer_style')
    class="footer-absolute"
@endsection
@section('isComponent')
    <link rel="stylesheet" href="{{asset('styles/components.css')}}">
@endsection
@section('content')
    @include('components/header')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Zweryfikuj swój adres email</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                Nowy link weryfikacyjny został wysłany na Twój adres e-mail.
                            </div>
                        @endif

                        Zanim przejdziesz dalej, sprawdź, czy w wiadomości e-mail znajduje się link weryfikacyjny.
                        Jeśli nie otrzymałeś wiadomości e-mail,
                        <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">kliknij tutaj, aby poprosić o inny</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components/footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
@endsection
