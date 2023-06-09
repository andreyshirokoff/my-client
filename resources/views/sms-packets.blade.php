@extends('user-layout')
@section('title')
    Pakiet SMS
@endsection
@section('isComponent')
    <link rel="stylesheet" href="{{asset('styles/components.css')}}">
@endsection
@section('btn3')
    active
@endsection

@section('acc-content')
    <p class="fs-5">Przy zmianie pakietu aktualne dni zostaną przeliczone według stawki miesięcznej (do
        wyższego lub niższego)</p>
    <div class="row row-gap-4 mt-4">
        <div class="col-12 col-md-4">
            <div class="service-card pb-3 rounded-3">
                <div>
                    <div class="offer-head rounded-3 d-flex flex-column align-items-center justify-content-center">
                        <p class="fs-1 text-white fw-bold text-center mb-1">100 SMS</p>
                    </div>
                    <p class="fs-1 fw-semibold text-center mb-1">30 zł</p>
                    <p class="text-center">NETTO </p>
                    <p class="fs-5 text-center">(30 gr / sms)</p>
                    <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">
                        <a class="btn btn-dark rounded-pill py-2 px-4">Doładuj</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="service-card pb-3 rounded-3">
                <div>
                    <div class="offer-head rounded-3 d-flex flex-column align-items-center justify-content-center">
                        <p class="fs-1 text-white fw-bold text-center mb-1">100 SMS</p>
                    </div>
                    <p class="fs-1 fw-semibold text-center mb-1">30 zł</p>
                    <p class="text-center">NETTO </p>
                    <p class="fs-5 text-center">(30 gr / sms)</p>
                    <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">
                        <a class="btn btn-dark rounded-pill py-2 px-4">Doładuj</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="service-card pb-3 rounded-3">
                <div>
                    <div class="offer-head rounded-3 d-flex flex-column align-items-center justify-content-center">
                        <p class="fs-1 text-white fw-bold text-center mb-1">100 SMS</p>
                    </div>
                    <p class="fs-1 fw-semibold text-center mb-1">30 zł</p>
                    <p class="text-center">NETTO </p>
                    <p class="fs-5 text-center">(30 gr / sms)</p>
                    <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">
                        <a class="btn btn-dark rounded-pill py-2 px-4">Doładuj</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
