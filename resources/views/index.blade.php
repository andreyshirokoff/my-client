@extends('layout')
@section('title')
    MyClient
@endsection
@section('isMainCss')
    <link rel="stylesheet" href="{{asset('styles/main.css')}}">
@endsection
@section('isComponent')
    <link rel="stylesheet" href="{{asset('styles/components.css')}}">
@endsection
@section('isSplide')
    <link rel="stylesheet" href="{{asset('js/splide-4.1.3/dist/css/splide.min.css')}}">
    <script src="{{asset('js/splide-4.1.3/dist/js/splide.min.js')}}"></script>
@endsection
@section('content')
    <div class="container-fluid px-0">
        <div class="container-fluid header-container p-0">
            @include('components/header')
            <div class="container sub-header px-3">
                <div class="row row-gap-5">
                    <div class="col-12 col-lg-5 col-xl-5">
                        <p class="fw-bold header-title">Niezawodny CRM dla całego zespołu</p>
                        <p class="fs-5 fw-semibold">Rozwiązania dla dużych i małych firm</p>
                        <p class="fs-5">Organizacja bazy danych, lejek sprzedażowy, automatyzacja procesów biznesowych, kontrola zadań i wydajności zespołu — wszystko w jednym systemie CRM.</p>
                        <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4">
                            <button class="btn btn-dark rounded-pill py-3 px-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Wypróbuj za 0 zł</button>
                            <a class="btn btn-transparent border border-dark border-2 rounded-pill py-3 px-5">Poznaj możliwości</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 col-xl-7">
                        <div class="d-flex align-items-center h-100">
                            <img width="100%" style="max-width: 644px" src="{{asset('images/tablet_and_laptop_mockup 1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5" style="position:relative">
            <i id="o-aplikacji" class="anchor"></i>
            <p class="fs-2 text-center fw-bold">Uporządkuj swoje dane biznesowe</p>
            <div class="mt-5">
                <div class="d-flex justify-content-between flex-column flex-sm-row row-gap-4">
                    <button bs-target="klienci-info" class="btn info-btn active btn-transparent rounded-2 offer-ctrl-btn">Klienci
                    </button>
                    <button bs-target="dane-info" class="btn info-btn btn-transparent rounded-2 offer-ctrl-btn">Dane
                    </button>
                    <button bs-target="bezpech-info" class="btn info-btn btn-transparent rounded-2 offer-ctrl-btn">Bezpieczeństwo
                    </button>
                    <button bs-target="chas-info" class="btn info-btn btn-transparent rounded-2 offer-ctrl-btn">Сzas
                    </button>
                </div>
                <div id="klienci-info" class="d-flex mt-5 hide-offer rounded-3 align-items-center column-gap-3">
                    <div class="col-12 col-md-6">
                        <p>Klienci</p>
                        <p class="fs-2 fw-bold">Twój klient korzysta wygodnie</p>
                        <div class="d-block d-md-none mb-3"><img width="100%" src="{{asset('images/Rectangle 2.png')}}" alt=""></div>
                        <p class="fs-5">Najlepszym urządzeniem do korzystania z aplikacji jest tablet. Klient wypełnia na nim zgodę
                            zabiegową zapoznając się z przeciwwskazaniami i akceptuje ją składając podpis za pomocą rysika
                            lub pisząc palcem.</p>
                    </div>
                    <div class="col-6 d-none d-md-block"><img width="100%" src="{{asset('images/Rectangle 2.png')}}" alt=""></div>
                </div>
                <div id="dane-info" class="d-none mt-5 hide-offer rounded-3 align-items-center column-gap-3">
                    <div class="col-12 col-md-6">
                        <p>Dane</p>
                        <p class="fs-2 fw-bold">Twój klient korzysta wygodnie</p>
                        <div class="d-block d-md-none mb-3"><img width="100%" src="{{asset('images/Rectangle 2.png')}}" alt=""></div>
                        <p class="fs-5">Najlepszym urządzeniem do korzystania z aplikacji jest tablet. Klient wypełnia na nim zgodę
                            zabiegową zapoznając się z przeciwwskazaniami i akceptuje ją składając podpis za pomocą rysika
                            lub pisząc palcem.</p>
                    </div>
                    <div class="col-6 d-none d-md-block"><img width="100%" src="{{asset('images/Rectangle 2.png')}}" alt=""></div>
                </div>
                <div id="bezpech-info" class="d-none mt-5 hide-offer rounded-3 align-items-center column-gap-3">
                    <div class="col-12 col-md-6">
                        <p>Dane</p>
                        <p class="fs-2 fw-bold">Twój klient korzysta wygodnie</p>
                        <div class="d-block d-md-none mb-3"><img width="100%" src="{{asset('images/Rectangle 2.png')}}" alt=""></div>
                        <p class="fs-5">Najlepszym urządzeniem do korzystania z aplikacji jest tablet. Klient wypełnia na nim zgodę
                            zabiegową zapoznając się z przeciwwskazaniami i akceptuje ją składając podpis za pomocą rysika
                            lub pisząc palcem.</p>
                    </div>
                    <div class="col-6 d-none d-md-block"><img width="100%" src="{{asset('images/Rectangle 2.png')}}" alt=""></div>
                </div>
                <div id="chas-info" class="d-none mt-5 hide-offer rounded-3 align-items-center column-gap-3">
                    <div class="col-12 col-md-6">
                        <p>Dane</p>
                        <p class="fs-2 fw-bold">Twój klient korzysta wygodnie</p>
                        <div class="d-block d-md-none mb-3"><img width="100%" src="{{asset('images/Rectangle 2.png')}}" alt=""></div>
                        <p class="fs-5">Najlepszym urządzeniem do korzystania z aplikacji jest tablet. Klient wypełnia na nim zgodę
                            zabiegową zapoznając się z przeciwwskazaniami i akceptuje ją składając podpis za pomocą rysika
                            lub pisząc palcem.</p>
                    </div>
                    <div class="col-6 d-none d-md-block"><img width="100%" src="{{asset('images/Rectangle 2.png')}}" alt=""></div>
                </div>
            </div>
        </div>
        <div class="container mt-5" style="position:relative">
            <i id="pierwsze-kroki" class="anchor"></i>
            <div class="row">
                <div class="col-12 col-lg-6 align-items-center d-flex justify-content-center">
                    <div class="position-relative p-0">
                        <img width="100%" class="position-absolute" style="z-index: -1; bottom: 12%" src="{{asset('images/Vector.svg')}}" alt="">
                        <img width="100%" src="{{asset('images/таб 1.png')}}" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6 px-5">
                    <p class="fs-1">Zacznij za darmo w 3 krokach!</p>
                    <div class="d-flex column-gap-3 align-items-center">
                        <div class="position-relative">
                            <div class="sub-bullet"></div>
                            <div class="img-bullet">
                                <img src="{{asset('images/exam%201.png')}}" alt="">
                            </div>
                        </div>
                        <div>
                            <p class="fs-5 fw-semibold">Zarejestruj się i korzystaj za darmo przez 30 dni</p>
                            <p class="">Załóż darmowe konto i wypróbuj pełną wersję aplikacji dla swojego salonu. Po tym okresie możesz wykupić pakiet, który Ci odpowiada, już od 99 zł miesięcznie.</p>
                        </div>
                    </div>
                    <div class="d-flex column-gap-3 align-items-center">
                        <div class="position-relative">
                            <div class="sub-bullet"></div>
                            <div class="img-bullet">
                                <img src="{{asset('images/clock%20(1)%201.png')}}" alt="">
                            </div>
                        </div>
                        <div>
                            <p class="fs-5 fw-semibold">Przygotuj aplikację do działania.</p>
                            <p class="">Stwórz karty zgody klienta i leczenia dla klientów do wypełnienia i podpisania podczas wizyt. Można wykorzystać karty przygotowane samodzielnie lub karty z szablonów. W aplikacji znajdują się również karty udostępnione przez partnerów.</p>
                        </div>
                    </div>
                    <div class="d-flex column-gap-3 align-items-center">
                        <div class="position-relative">
                            <div class="sub-bullet"></div>
                            <div class="img-bullet">
                                <img src="{{asset('images/hand-touching-tablet-screen 1.png')}}" alt="">
                            </div>
                        </div>
                        <div>
                            <p class="fs-5 fw-semibold">Przekonaj się ile może dać Ci MyClient!</p>
                            <p class="">Sprawdź w praktyce wygodę wypełniania dokumentów w formie elektronicznej na tablecie. Koniec z szafami pełnymi dokumentów, niewyraźnym pismem i traceniem czasu na poszukiwanie jednego dokumentu.
                                Od teraz wszystkie potrzebne informacje w jednym miejscu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5 mb-5" style="position:relative">
            <i id="dlaczego-warto" class="anchor"></i>
            <p class="text-center fs-1 fw-bold">Dlaczego warto?</p>
            <p class="fs-5 text-center">MyClient to połączenie wielu firm, które dołożyły starań by zapewnić naszej aplikacji jak
                najlepszy start. Poprzez wsparcie technologiczne, marketingowe lub doradztwo.</p>
            <section class="splide" id="slider" aria-labelledby="carousel-heading" style="height: 72px;">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach(\App\Models\Partner::getArray() as $partner)
                            <li class="splide__slide text-center"><img src="{{asset('/storage/'.$partner->image)}}" alt=""></li>
                        @endforeach
{{--                        <li class="splide__slide text-center"><img src="{{asset('images/logo2%20(1)%201.png')}}" alt=""></li>--}}
{{--                        <li class="splide__slide text-center"><img src="{{ asset('images/logo2%20(1)%201.png') }}" alt=""></li>--}}
{{--                        <li class="splide__slide text-center"><img src="{{ asset('images/logo2%20(1)%201.png') }}" alt=""></li>--}}
{{--                        <li class="splide__slide text-center"><img src="{{ asset('images/logo2%20(1)%201.png') }}" alt=""></li>--}}
{{--                        <li class="splide__slide text-center"><img src="{{ asset('images/logo2%20(1)%201.png') }}" alt=""></li>--}}
{{--                        <li class="splide__slide text-center"><img src="{{ asset('images/logo2%20(1)%201.png') }}" alt=""></li>--}}
{{--                        <li class="splide__slide text-center"><img src="{{ asset('images/logo2%20(1)%201.png') }}" alt=""></li>--}}
{{--                        <li class="splide__slide text-center"><img src="{{ asset('images/logo2%20(1)%201.png') }}" alt=""></li>--}}
{{--                        <li class="splide__slide text-center"><img src="{{ asset('images/logo2%20(1)%201.png') }}" alt=""></li>--}}
{{--                        <li class="splide__slide text-center"><img src="{{ asset('images/logo2%20(1)%201.png') }}" alt=""></li>--}}
{{--                        <li class="splide__slide text-center"><img src="{{ asset('images/logo2%20(1)%201.png') }}" alt=""></li>--}}
                    </ul>
                </div>
                <div class="splide__arrows splide__arrows--ltr">
                    <button
                        class="splide__arrow splide__arrow--prev fs-2 bg-transparent text-dark fw-bold"
                        type="button"
                        style="top: 68%; left: 0"
                        aria-label="Previous slide"
                        aria-controls="splide01-track"
                    >
                        <img src="{{asset('images/left.png')}}" alt="">
                    </button>
                    <button
                        class="splide__arrow splide__arrow--next  fs-2 bg-transparent text-dark fw-bold"
                        type="button"
                        style="top: 68%;right: 0"
                        aria-label="Next slide"
                        aria-controls="splide01-track"
                    >
                        <img src="{{asset('images/right.png')}}" alt="">
                    </button>
                </div>
            </section>
        </div>
        <div class="container">
            <p class="fs-2 fw-bold text-center">Ile kosztuje MyClient?</p>
            <p class="fs-5 text-center">
                Rozumiemy jak ważna jest organizacja kosztów w miejscu Beauty – dlatego plany taryfowe dopasowaliśmy do wielkości zespołu jaki posiadasz. Dzięki temu, możesz korzystać z pełnego zakresu funkcjonalności aplikacji już od 99 zł netto miesięcznie.
            </p>
            <p class="fs-5 text-center">
                KUP TANIEJ: Przy zakupie pakietu na 3 miesiące otrzymasz -5% rabatu, kup na rok by zyskać aż -10% rabatu! Wybierz pakiet i sprawdź.
            </p>
            <div class="row row-gap-4 mt-4">
                @foreach(\App\Models\Tariff::getArray() as $tariff)
                    @if($tariff->is_actual == 1)
                    <div class="col-12 col-md-6 tariff-block" data-id="{{$tariff->id}}">
                        <div class="service-card pb-3">
                            <div>
                                @if($tariff->tariff_annotation_id != null)
                                    <div class="offer-head position-relative">
                                        <p class="fs-1 text-white fw-bold text-center mb-1">{{$tariff->title}}</p>
                                        <p class="text-white text-center">{{$tariff->announce}}</p>
                                        <div class="position-absolute discount-box">
                                            <p>{{\App\Models\Tariff::getAnnotation($tariff->tariff_annotation_id)->title}}!</p>
                                            <p class="sub-discount">{{\App\Models\Tariff::getAnnotation($tariff->tariff_annotation_id)->text}}</p>
                                        </div>
                                    </div>
                                @else
                                    <div class="offer-head">
                                        <p class="fs-1 text-white fw-bold text-center mb-1">{{$tariff->title}}</p>
                                        <p class="text-white text-center">{{$tariff->announce}}</p>
                                    </div>
                                @endif
                                <p class="fs-1 fw-semibold text-center mb-1">{{$tariff->price}} zł</p>
                                <p class="text-center">NETTO MIESIĘCZNIE</p>
                                <div class="mx-auto offer-list">
                                    @if(strlen($tariff->list) > 0)
                                        @foreach(\App\Models\Tariff::getListList($tariff->id) as $li)
                                            <div class="d-flex column-gap-2 align-items-center">
                                                <div class="rounded-circle offer-bullet text-center">
                                                    <img src="{{ asset('images/Vector%203.png') }}" alt="">
                                                </div>
                                                <p class="fs-5 fw-semibold">{{$li['text']}}</p>
                                            </div>
                                        @endforeach
                                    @endif
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="{{asset('images/Vector%203.png')}}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="{{asset('images/Vector%203.png')}}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="{{asset('images/Vector%203.png')}}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Pełna funkcjonalność aplikacji</p>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">
                                    @if(Auth::user())
                                        @if(\App\Models\UserTariff::where('user_id', Auth::user()->id)->first())

                                            <a class="btn btn-secondary rounded-pill py-2 px-4" style="cursor:none;pointer-events: none;">Niedostępne</a>
                                        @elseif(
                                            !\App\Models\UserTariff::where('user_id', Auth::user()->id)->first()
                                            && \App\Models\User::where('id', Auth::user()->id)->first()->is_phone_confirm == 0
                                        )
                                            <a class="btn btn-dark rounded-pill py-2 px-4" id="call-verify">Wypróbuj</a>
                                        @else
                                            <a data-action="{{route('try.tariff')}}" class="btn btn-dark try-tariff rounded-pill py-2 px-4" data-token="{{csrf_token()}}" data-bs-toggle="modal" data-bs-target="#tariff-get-confirm">Wypróbuj</a>
                                        @endif
                                    @else
                                        <a class="btn btn-dark rounded-pill py-2 px-4" href="{{url('/login')}}">Wypróbuj </a>
                                    @endif
                                    <a href="{{url('/price-page')}}?id={{strtolower($tariff->title)}}" class="btn btn-transparent border border-dark border-2 rounded-pill py-2 px-4">więcej</a>
                                </div>
                                <p class="fw-semibold text-center mt-3 mb-0">{{$tariff->trial}} dni za darmo!</p>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
{{--                <div class="col-12 col-md-6 ">--}}
{{--                    <div class="service-card pb-3">--}}
{{--                        <div>--}}
{{--                            <div class="offer-head">--}}
{{--                                <p class="fs-1 text-white fw-bold text-center mb-1">Solo</p>--}}
{{--                                <p class="text-white text-center">Dla Ciebie</p>--}}
{{--                            </div>--}}
{{--                            <p class="fs-1 fw-semibold text-center mb-1">99 zł</p>--}}
{{--                            <p class="text-center">NETTO MIESIĘCZNIE</p>--}}
{{--                            <div class="mx-auto offer-list">--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="{{asset('images/Vector%203.png')}}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="{{asset('images/Vector%203.png')}}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="{{asset('images/Vector%203.png')}}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Pełna funkcjonalność aplikacji</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">--}}
{{--                                <a class="btn btn-dark rounded-pill py-2 px-4">Wypróbuj </a>--}}
{{--                                <a class="btn btn-transparent border border-dark border-2 rounded-pill py-2 px-4">więcej</a>--}}
{{--                            </div>--}}
{{--                            <p class="fw-semibold text-center mt-3 mb-0">30 dni za darmo!</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-6">--}}
{{--                    <div class="service-card pb-3">--}}
{{--                        <div>--}}
{{--                            <div class="offer-head">--}}
{{--                                <p class="fs-1 text-white fw-bold text-center mb-1">Basic</p>--}}
{{--                                <p class="text-white text-center">Mały zespół</p>--}}
{{--                            </div>--}}
{{--                            <p class="fs-1 fw-semibold text-center mb-1">149 zł</p>--}}
{{--                            <p class="text-center">NETTO MIESIĘCZNIE</p>--}}
{{--                            <div class="mx-auto offer-list">--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Do 5 pracowników</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Pełna funkcjonalność aplikacji</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">--}}
{{--                                <a class="btn btn-dark rounded-pill py-2 px-4">Wypróbuj </a>--}}
{{--                                <a class="btn btn-transparent border border-dark border-2 rounded-pill py-2 px-4">więcej</a>--}}
{{--                            </div>--}}
{{--                            <p class="fw-semibold text-center mt-3 mb-0">30 dni za darmo!</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-6">--}}
{{--                    <div class="service-card pb-3">--}}
{{--                        <div>--}}
{{--                            <div class="offer-head position-relative">--}}
{{--                                <p class="fs-1 text-white fw-bold text-center mb-1">Medium</p>--}}
{{--                                <p class="text-white text-center">Duży zespół</p>--}}
{{--                                <div class="position-absolute discount-box">--}}
{{--                                    <p>UDERZYĆ!</p>--}}
{{--                                    <p class="sub-discount">Wybrany przez 60% klientów</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p class="fs-1 fw-semibold text-center mb-1">229 zł</p>--}}
{{--                            <p class="text-center">NETTO MIESIĘCZNIE</p>--}}
{{--                            <div class="mx-auto offer-list">--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Do 10 pracowników</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Pełna funkcjonalność aplikacji</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">--}}
{{--                                <a class="btn btn-dark rounded-pill py-2 px-4">Wypróbuj </a>--}}
{{--                                <a class="btn btn-transparent border border-dark border-2 rounded-pill py-2 px-4">więcej</a>--}}
{{--                            </div>--}}
{{--                            <p class="fw-semibold text-center mt-3 mb-0">30 dni za darmo!</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-6">--}}
{{--                    <div class="service-card pb-3">--}}
{{--                        <div>--}}
{{--                            <div class="offer-head">--}}
{{--                                <p class="fs-1 text-white fw-bold text-center mb-1">Pro</p>--}}
{{--                                <p class="text-white text-center">No limit</p>--}}
{{--                            </div>--}}
{{--                            <p class="fs-1 fw-semibold text-center mb-1">349 zł</p>--}}
{{--                            <p class="text-center">NETTO MIESIĘCZNIE</p>--}}
{{--                            <div class="mx-auto offer-list">--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Do 10 pracowników</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Pełna funkcjonalność aplikacji</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">--}}
{{--                                <a class="btn btn-dark rounded-pill py-2 px-4">Wypróbuj </a>--}}
{{--                                <a class="btn btn-transparent border border-dark border-2 rounded-pill py-2 px-4">więcej</a>--}}
{{--                            </div>--}}
{{--                            <p class="fw-semibold text-center mt-3 mb-0">30 dni za darmo!</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="container mt-5 mb-5">
            <form action="" class="callback-form py-5 rounded-3" data-action="{{route('quest.send')}}" data-token="{{csrf_token()}}">
                <div>
                    <p class="fs-1 text-white fw-bold text-center">Czy masz jakieś pytania?</p>
                    <p class="fs-5 fw-semibold text-white text-center">Zostaw swój numer telefonu, a nasz manager skontaktuje się z Tobą i
                        odpowie na każde pytanie</p>
                    <div class="mt-4 callback-row">
                        <label class="text-white fw-light" for="name">Twoje imię</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Wpisz swoje imię">
                    </div>
                    <div class="mt-3 callback-row">
                        <label class="text-white fw-light" for="phone">Wpisz numer telefonu</label>
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="+48 565 655 44">
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <button type="button" id="quest-send-btn" class="btn btn-light callback-btn py-3 rounded-pill">Wysłać</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container mt-5 pb-5" style="position:relative">
        <i id="faq" class="anchor"></i>
        <p class="fs-2 text-center fw-bold">Chcesz nas o coś zapytać?</p>
        <div>
            <div class="d-flex column-gap-4 align-items-center question-box">
                <p class="col-5 fs-5 fw-semibold">Na jakie systemy dedykowana jest aplikacja?</p>
                <p class="col-7">Aplikacja działa na systemach iOS, Android, jest też możliwość używania w przeglądarce
                    internetowej na dowolnym urządzeniu. Po prostu przejdź na tablecie na stronę app.beautycheck.pl –
                    dedykowane aplikacje do pobrania są jeszcze w przygotowaniu.</p>
            </div>
            <div class="d-flex column-gap-4 align-items-center question-box">
                <p class="col-5 fs-5 fw-semibold">Jaka jest cena i jaki jest system płatności?</p>
                <p class="col-7">Aplikację można doładować w przód o miesiąc, kwartał, rok. Opłata z góry na kwartał lub rok powoduje naliczenie rabatu 5% / 10%. Podstawowy pakiet zaczyna się już od 99 zł netto miesięcznie i jest zależny od ilości pracowników.</p>
            </div>
            <div class="d-flex column-gap-4 align-items-center question-box">
                <p class="col-5 fs-5 fw-semibold">W jaki sposób są chronione dane osobowe?</p>
                <p class="col-7">Dane osobowe przechowywane są na chronionym i zabezpieczonym serwerze w firmie ZENBOX. Jako autorzy aplikacji odpowiadamy za bezpieczeństwo wszystkich poufnych dokumentów. Wszystkie dane są zabezpieczone zgodnie z polityką RODO.</p>
            </div>
            <div class="d-flex column-gap-4 align-items-center question-box">
                <p class="col-5 fs-5 fw-semibold">Na jakie systemy dedykowana jest aplikacja?</p>
                <p class="col-7">Aplikacja działa na systemach iOS, Android, jest też możliwość używania w przeglądarce
                    internetowej na dowolnym urządzeniu. Po prostu przejdź na tablecie na stronę app.beautycheck.pl –
                    dedykowane aplikacje do pobrania są jeszcze w przygotowaniu.</p>
            </div>
            <div class="d-flex column-gap-4 align-items-center question-box">
                <p class="col-5 fs-5 fw-semibold">Czy aplikacja posiada wszystkie niezbędne regulacje prawne związane z ustawą RODO?</p>
                <p class="col-7">Udostępnione w programie wzory dokumentów zostały zweryfikowane pod względem ich zgodności z obowiązującymi przepisami prawa, w szczególności z przepisami o ochronie danych osobowych, przed zespół doświadczonych prawników. Jednakże to do Ciebie należy decyzja, czy chcesz korzystać z gotowych opracowań czy posługiwać się dokumentami opracowanymi przez siebie.</p>
            </div>
            <div class="d-flex column-gap-4 align-items-center question-box">
                <p class="col-5 fs-5 fw-semibold">Czy jednocześnie pare osób może korzystać z aplikacji w tym samym czasie?</p>
                <p class="col-7">Oczywiście! Każdy pracownik może pracować na aplikacji w tym samym czasie na swoim koncie. Dodatkowo utworzenie kont pracownikom z osobna będzie dawało w przyszłości jeszcze więcej możliwości współpracy w zespole Twojego salonu.</p>
            </div>
        </div>
    </div>
    @include('components/footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script>
        document.addEventListener( 'DOMContentLoaded', function() {
            let el = document.getElementById('slider');
            var splide = new Splide( el , {
                mediaQuery: 'max',
                perPage: 4,
                padding: { left: 0, right: 0 },
                breakpoints: {
                    1200: {
                        perPage: 3,
                        padding: { left: 0, right: 0 }
                    },
                    990: {
                        perPage: 2,
                        padding: { left: 0, right: 0 }
                    },
                    680: {
                        perPage: 1,
                        padding: { left: 0, right: 0 }
                    }
                }
            });
            splide.mount();
        } );
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
@endsection
