@extends('layout')
@section('title')
    Obszar osobisty
@endsection
@section('btn1')
    active
@endsection
@section('footer_style')
    style="position:absolute;bottom:0;left:0;width:100%"
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
@endsection
