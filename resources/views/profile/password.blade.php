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
            <form class="authorization-form" method="POST" action="{{ route('user-password.update') }}">
                @csrf
                @method('PUT')

                @if(session('status') == 'password-updated')
                    <div class="alert alert-success">
                        Hasło zostało zmienione
                    </div>
                @endif

                <div class="inner-container">
                    <p class="text-center fs-2 fw-bold">Odzyskiwanie hasła</p>
                    <div class="mt-3">
                        <label class="form-label" for="current_password">Wprowadź aktualne hasło</label>
                        <input type="password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" name="current_password" id="current_password" placeholder="**********" required autofocus>
                        @error('current_password', 'updatePassword')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="password">Wprowadź nowe hasło</label>
                        <input type="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror" name="password" id="password" placeholder="**********" required autocomplete="new-password">
                        @error('password', 'updatePassword')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="password_confirmation">Potwierdź nowe hasło</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="**********" required autocomplete="new-password">
                    </div>
                    <button type="submit" class="btn btn-dark w-100 mt-4 py-4 fs-5 rounded-pill">Potwierdzać</button>
                    <button type="button" class="btn border border-dark btn-transparent w-100 mt-4 py-4 fs-5 rounded-pill" id="password-cancel">Anulowanie</button>
                </div>
            </form>
        </div>
    </div>
    @include('components/footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script>
        $('#password-cancel').click(() => {
            $('input').each((i, input) => {
                $(input).val('')
            })
        })
    </script>
@endsection
