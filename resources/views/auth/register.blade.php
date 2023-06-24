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
            @if (Route::has('login'))
                <p class="text-end fs-5 pe-2">Czy jesteś już zarejestrowany? <a href="{{ route('login') }}" class="text-dark fw-semibold">Wejść</a></p>
            @endif
            <form action="" class="authorization-form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="inner-container">
                    <p class="text-center fs-2 fw-bold">Rejestracja</p>
                    <p class="text-center fs-5 fw-semibold">Rozpocznij okres próbny już teraz!</p>
                    <div class="mt-3">
                        <label class="form-label" for="name">Wpisz swoje imię</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Mirosław" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="email">Wprowadź swój email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Example@gmail.com" required autocomplete="email">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="phone">Wprowadź swój numer telefonu</label>
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="+48 456 56 56" required autocomplete="phone">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="password">Wprowadź swój hasło</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="**********" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="password-confirm">Potwierdź hasło</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="**********">
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
