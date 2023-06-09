@extends('user-layout')
@section('title')
    Baza wiedzy
@endsection
@section('isComponent')
    <link rel="stylesheet" href="{{asset('styles/components.css')}}">
@endsection
@section('btn5')
    active
@endsection

@section('acc-content')
    <p class="fs-5">System zgłoszeń jest obecnie w przygotowaniu – zapraszamy do skorzystania z formularza zgłoszeniowego – oddzwonimy do Ciebie. Możesz również sam/sama do nas zadzwonić aby uzyskać wsparcie telefoniczne</p>
    <div class="container mt-5 pb-5">
        <p class="fs-2 text-center fw-bold">Chcesz nas o coś zapytać?</p>
        <div>
            <div class="d-flex column-gap-4 align-items-center question-box">
                <p class="col-5 fs-5 fw-semibold">Dla nowych klientów</p>
                <div class="col-7">
                    <ul>
                        <li>Co zalecamy zrobić ze starymi kartami klientów?</li>
                        <li>Jak przygotwać aplikacje do pracy. Krok po kroku.</li>
                        <li>W jaki sposób usprawni to pracę w Twoim miejscu Beauty?</li>
                        <li>Czym jest aplikacja BeautyCheck i dla kogo jest dedykowana?</li>
                    </ul>
                </div>
            </div>
            <div class="d-flex column-gap-4 align-items-center question-box">
                <p class="col-5 fs-5 fw-semibold">Zarządzanie kontem</p>
                <div class="col-7">
                    <ul>
                        <li>Podpis specjalisty – jak dodać?</li>
                        <li>Czy właściciel może zresetować hasło swoim pracownikom?</li>
                        <li>Formy płatności</li>
                        <li>Czym różnią się poszczególne pakiety?</li>
                        <li>Jak mogę zwiększyć lub zmniejszyć pakiet?</li>
                        <li>Jak mogę wykupić abonament?</li>
                    </ul>
                </div>
            </div>
            <div class="d-flex column-gap-4 align-items-center question-box">
                <p class="col-5 fs-5 fw-semibold">Obsługa aplikacji</p>
                <div class="col-7">
                    <ul>
                        <li>Czy jest możliwość wyłączenia wysyłania zaleceń pozabiegowych?</li>
                        <li>Czy moje dane i dane moich klientów są chronione?</li>
                        <li>Jak wykonać zabieg w aplikacji?</li>
                        <li>Jak zmienić kolor aplikacji?</li>
                        <li>Jak dodać kartę zabiegową?</li>
                        <li>Jak dodać kartę klienta?</li>
                        <li>Jak dodać zabieg w aplikacji?</li>
                        <li>Jak znaleźć klienta?</li>
                        <li>Jak dodać nowego klienta?</li>
                        <li>Jak dodać nowego pracownika?</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
