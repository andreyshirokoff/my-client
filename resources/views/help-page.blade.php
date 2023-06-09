@extends('user-layout')
@section('title')
    Pomoc techniczna
@endsection
@section('isComponent')
    <link rel="stylesheet" href="{{asset('styles/components.css')}}">
@endsection
@section('btn4')
    active
@endsection

@section('acc-content')
    <p class="fs-5">System zgłoszeń jest obecnie w przygotowaniu – zapraszamy do skorzystania z formularza zgłoszeniowego – oddzwonimy do Ciebie. Możesz również sam/sama do nas zadzwonić aby uzyskać wsparcie telefoniczne</p>
    <form action="">
        <div class="d-flex flex-column flex-xl-row row-gap-3 column-gap-4">
            <div class="col-12 col-xl-6">
                <label for="name" class="form-label fs-5 fw-semibold">Wpisz swoje imię</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Константин">
            </div>
            <div class="col-12 col-xl-6">
                <label for="name" class="form-label fs-5 fw-semibold">Wprowadź swój numer telefonu</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="+ 456 54 54 54">
            </div>
        </div>
        <div class="mt-3">
            <label for="email" class="form-label fs-5 fw-semibold">Email</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="Example@gmail.com">
        </div>
        <div class="mt-3">
            <label for="info" class="form-label fs-5 fw-semibold">Wiadomość</label>
            <textarea class="form-control fs-5" id="info" name="info" placeholder="Napisz komentarz/zadaj pytanie" style="height: 192px"></textarea>
        </div>
        <div class="mt-5 d-flex justify-content-center">
            <button type="submit" class="btn btn-dark px-5 py-3 rounded-pill">Wysłać</button>
        </div>
    </form>
@endsection
