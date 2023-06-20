@extends('layout')
@section('title')
    Cennik
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
    </div>
    <div class="container mt-5">
        <p class="fs-2 fw-bold text-center">Ile kosztuje MyClient?</p>
        <p class="fs-5 text-center">
            Rozumiemy jak ważna jest organizacja kosztów w miejscu Beauty – dlatego plany taryfowe dopasowaliśmy do wielkości zespołu jaki posiadasz. Dzięki temu, możesz korzystać z pełnego zakresu funkcjonalności aplikacji już od 99 zł netto miesięcznie.
        </p>
        <p class="fs-5 text-center">
            KUP TANIEJ: Przy zakupie pakietu na 3 miesiące otrzymasz -5% rabatu, kup na rok by zyskać aż -10% rabatu! Wybierz pakiet i sprawdź.
        </p>
        <div class="mt-5 mb-5">
            <div class="d-flex justify-content-between flex-column flex-sm-row row-gap-4">
                @php $i = 0 @endphp
                @foreach($tariffs->all() as $tariff)
                    @if(isset($_GET['id']))
                        @if($_GET['id'] == strtolower($tariff->title))
                            @php $isActive = 'active' @endphp
                        @else
                            @php $isActive = '' @endphp
                        @endif
                    @else
                        @if($i == 0)
                            @php $isActive = 'active' @endphp
                        @else
                            @php $isActive = '' @endphp
                        @endif
                    @endif
                    <button bs-target="{{strtolower($tariff->title)}}" class="btn info-btn {{$isActive}} btn-transparent rounded-2 offer-ctrl-btn">{{$tariff->title}}
                    </button>
                    @php $i++ @endphp
                @endforeach

{{--                <button bs-target="solo" class="btn info-btn active btn-transparent rounded-2 offer-ctrl-btn">Solo--}}
{{--                </button>--}}
{{--                <button bs-target="basic" class="btn info-btn btn-transparent rounded-2 offer-ctrl-btn">Basic--}}
{{--                </button>--}}
{{--                <button bs-target="medium" class="btn info-btn btn-transparent rounded-2 offer-ctrl-btn">Medium--}}
{{--                </button>--}}
{{--                <button bs-target="pro" class="btn info-btn btn-transparent rounded-2 offer-ctrl-btn">Pro--}}
{{--                </button>--}}
            </div>
            @php $i = 0 @endphp
            @foreach($tariffs->all() as $tariff)
                @if(isset($_GET['id']))
                    @if($_GET['id'] == strtolower($tariff->title))
                        @php $class = 'd-flex' @endphp
                    @else
                        @php $class = 'd-none' @endphp
                    @endif
                @else
                    @if($i == 0)
                        @php $class = 'd-flex' @endphp
                    @else
                        @php $class = 'd-none' @endphp
                    @endif
                @endif
                <div id="{{strtolower($tariff->title)}}" class="{{$class}} mt-5 hide-offer rounded-3 align-items-center column-gap-3">
                    <div class="col-12 col-lg-5">
                        <p>Cennik</p>
                        <p class="fs-2 fw-bold">Taryfa {{$tariff->title}}</p>
                        <div class="d-block d-lg-none mb-3">
                            <div class="service-card pb-3 bg-white">
                                <div>
                                    <div class="offer-head">
                                        <p class="fs-1 text-white fw-bold text-center mb-1">{{$tariff->title}}</p>
                                        <p class="text-white text-center">{{$tariff->announce}}</p>
                                    </div>
                                    <p class="fs-1 fw-semibold text-center mb-1">{{$tariff->price}} zł</p>
                                    <p class="text-center">NETTO MIESIĘCZNIE</p>
                                    <div class="mx-auto offer-list">
                                        <div class="d-flex column-gap-2 align-items-center">
                                            <div class="rounded-circle offer-bullet text-center">
                                                <img src="images/Vector%203.png" alt="">
                                            </div>
                                            <p class="fs-5 fw-semibold">Do 5 pracowników</p>
                                        </div>
                                        <div class="d-flex column-gap-2 align-items-center">
                                            <div class="rounded-circle offer-bullet text-center">
                                                <img src="images/Vector%203.png" alt="">
                                            </div>
                                            <p class="fs-5 fw-semibold">Bez zobowiązań</p>
                                        </div>
                                        <div class="d-flex column-gap-2 align-items-center">
                                            <div class="rounded-circle offer-bullet text-center">
                                                <img src="images/Vector%203.png" alt="">
                                            </div>
                                            <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>
                                        </div>
                                        <div class="d-flex column-gap-2 align-items-center">
                                            <div class="rounded-circle offer-bullet text-center">
                                                <img src="images/Vector%203.png" alt="">
                                            </div>
                                            <p class="fs-5 fw-semibold">Pełna funkcjonalność aplikacji</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">
                                        <a class="btn btn-dark rounded-pill py-2 px-4">Wypróbuj </a>
                                        <a class="btn btn-transparent border border-dark border-2 rounded-pill py-2 px-4">więcej</a>
                                    </div>
                                    <p class="fw-semibold text-center mt-3 mb-0">{{$tariff->trial}} dni za darmo!</p>
                                </div>
                            </div>
                        </div>
                        <p class="fs-5">{{$tariff->detail_text}}</p>
                    </div>
                    <div class="col-7 d-none d-lg-block">
                        <div class="service-card pb-3 bg-white">
                            <div>
                                <div class="offer-head">
                                    <p class="fs-1 text-white fw-bold text-center mb-1">{{$tariff->title}}</p>
                                    <p class="text-white text-center">{{$tariff->announce}}</p>
                                </div>
                                <p class="fs-1 fw-semibold text-center mb-1">{{$tariff->price}} zł</p>
                                <p class="text-center">NETTO MIESIĘCZNIE</p>
                                <div class="mx-auto offer-list">
                                    <div class="d-flex column-gap-2 align-items-center">
                                        <div class="rounded-circle offer-bullet text-center">
                                            <img src="images/Vector%203.png" alt="">
                                        </div>
                                        <p class="fs-5 fw-semibold">Do 5 pracowników</p>
                                    </div>
                                    <div class="d-flex column-gap-2 align-items-center">
                                        <div class="rounded-circle offer-bullet text-center">
                                            <img src="images/Vector%203.png" alt="">
                                        </div>
                                        <p class="fs-5 fw-semibold">Bez zobowiązań</p>
                                    </div>
                                    <div class="d-flex column-gap-2 align-items-center">
                                        <div class="rounded-circle offer-bullet text-center">
                                            <img src="images/Vector%203.png" alt="">
                                        </div>
                                        <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>
                                    </div>
                                    <div class="d-flex column-gap-2 align-items-center">
                                        <div class="rounded-circle offer-bullet text-center">
                                            <img src="images/Vector%203.png" alt="">
                                        </div>
                                        <p class="fs-5 fw-semibold">Pełna funkcjonalność aplikacji</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">
                                    <a class="btn btn-dark rounded-pill py-2 px-4">Wypróbuj </a>
                                </div>
                                <p class="fw-semibold text-center mt-3 mb-0">{{$tariff->trial}} dni za darmo!</p>
                            </div>
                        </div>
                    </div>
                </div>
                @php $i++ @endphp
            @endforeach

{{--            <div id="basic" class="d-flex mt-5 hide-offer rounded-3 align-items-center column-gap-3">--}}
{{--                <div class="col-12 col-lg-5">--}}
{{--                    <p>Cennik</p>--}}
{{--                    <p class="fs-2 fw-bold">Taryfa Basic</p>--}}
{{--                    <div class="d-block d-lg-none mb-3">--}}
{{--                        <div class="service-card pb-3 bg-white">--}}
{{--                            <div>--}}
{{--                                <div class="offer-head">--}}
{{--                                    <p class="fs-1 text-white fw-bold text-center mb-1">Basic</p>--}}
{{--                                    <p class="text-white text-center">Mały zespół</p>--}}
{{--                                </div>--}}
{{--                                <p class="fs-1 fw-semibold text-center mb-1">149 zł</p>--}}
{{--                                <p class="text-center">NETTO MIESIĘCZNIE</p>--}}
{{--                                <div class="mx-auto offer-list">--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="images/Vector%203.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Do 5 pracowników</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="images/Vector%203.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="images/Vector%203.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="images/Vector%203.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Pełna funkcjonalność aplikacji</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">--}}
{{--                                    <a class="btn btn-dark rounded-pill py-2 px-4">Wypróbuj </a>--}}
{{--                                    <a class="btn btn-transparent border border-dark border-2 rounded-pill py-2 px-4">więcej</a>--}}
{{--                                </div>--}}
{{--                                <p class="fw-semibold text-center mt-3 mb-0">30 dni za darmo!</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <p class="fs-5">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>--}}
{{--                </div>--}}
{{--                <div class="col-7 d-none d-lg-block">--}}
{{--                    <div class="service-card pb-3 bg-white">--}}
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
{{--                                        <img src="images/Vector%203.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Do 5 pracowników</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="images/Vector%203.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="images/Vector%203.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="images/Vector%203.png" alt="">--}}
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
{{--            </div>--}}
{{--            <div id="solo" class="d-none mt-5 hide-offer rounded-3 align-items-center column-gap-3">--}}
{{--                <div class="col-12 col-lg-5">--}}
{{--                    <p>Cennik</p>--}}
{{--                    <p class="fs-2 fw-bold">Taryfa Solo</p>--}}
{{--                    <div class="d-block d-lg-none mb-3">--}}
{{--                        <div class="service-card pb-3 bg-white">--}}
{{--                            <div>--}}
{{--                                <div class="offer-head">--}}
{{--                                    <p class="fs-1 text-white fw-bold text-center mb-1">Solo</p>--}}
{{--                                    <p class="text-white text-center">Dla Ciebie</p>--}}
{{--                                </div>--}}
{{--                                <p class="fs-1 fw-semibold text-center mb-1">99 zł</p>--}}
{{--                                <p class="text-center">NETTO MIESIĘCZNIE</p>--}}
{{--                                <div class="mx-auto offer-list">--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="images/Vector%203.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="images/Vector%203.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="images/Vector%203.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Pełna funkcjonalność aplikacji</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">--}}
{{--                                    <a class="btn btn-dark rounded-pill py-2 px-4">Wypróbuj </a>--}}
{{--                                    <a class="btn btn-transparent border border-dark border-2 rounded-pill py-2 px-4">więcej</a>--}}
{{--                                </div>--}}
{{--                                <p class="fw-semibold text-center mt-3 mb-0">30 dni za darmo!</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <p class="fs-5">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>--}}
{{--                </div>--}}
{{--                <div class="col-7 d-none d-lg-block">--}}
{{--                    <div class="service-card pb-3 bg-white">--}}
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
{{--                                        <img src="images/Vector%203.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="images/Vector%203.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="images/Vector%203.png" alt="">--}}
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
{{--            </div>--}}
{{--            <div id="medium" class="d-none mt-5 hide-offer rounded-3 align-items-center column-gap-3">--}}
{{--                <div class="col-12 col-lg-5">--}}
{{--                    <p>Cennik</p>--}}
{{--                    <p class="fs-2 fw-bold">Taryfa Medium</p>--}}
{{--                    <div class="d-block d-lg-none mb-3">--}}
{{--                        <div class="service-card pb-3 bg-white">--}}
{{--                            <div>--}}
{{--                                <div class="offer-head">--}}
{{--                                    <p class="fs-1 text-white fw-bold text-center mb-1">Medium</p>--}}
{{--                                    <p class="text-white text-center">No limit</p>--}}
{{--                                </div>--}}
{{--                                <p class="fs-1 fw-semibold text-center mb-1">229 zł</p>--}}
{{--                                <p class="text-center">NETTO MIESIĘCZNIE</p>--}}
{{--                                <div class="mx-auto offer-list">--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="images/Vector%203.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Do 10 pracowników</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="images/Vector%203.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="images/Vector%203.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="images/Vector%203.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Pełna funkcjonalność aplikacji</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">--}}
{{--                                    <a class="btn btn-dark rounded-pill py-2 px-4">Wypróbuj </a>--}}
{{--                                    <a class="btn btn-transparent border border-dark border-2 rounded-pill py-2 px-4">więcej</a>--}}
{{--                                </div>--}}
{{--                                <p class="fw-semibold text-center mt-3 mb-0">30 dni za darmo!</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <p class="fs-5">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>--}}
{{--                </div>--}}
{{--                <div class="col-7 d-none d-lg-block">--}}
{{--                    <div class="service-card pb-3 bg-white">--}}
{{--                        <div>--}}
{{--                            <div class="offer-head">--}}
{{--                                <p class="fs-1 text-white fw-bold text-center mb-1">Medium</p>--}}
{{--                                <p class="text-white text-center">No limit</p>--}}
{{--                            </div>--}}
{{--                            <p class="fs-1 fw-semibold text-center mb-1">229 zł</p>--}}
{{--                            <p class="text-center">NETTO MIESIĘCZNIE</p>--}}
{{--                            <div class="mx-auto offer-list">--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="images/Vector%203.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Do 10 pracowników</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="images/Vector%203.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="images/Vector%203.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="images/Vector%203.png" alt="">--}}
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
{{--            </div>--}}
{{--            <div id="pro" class="d-none mt-5 hide-offer rounded-3 align-items-center column-gap-3">--}}
{{--                <div class="col-12 col-lg-5">--}}
{{--                    <p>Cennik</p>--}}
{{--                    <p class="fs-2 fw-bold">Taryfa Solo</p>--}}
{{--                    <div class="d-block d-lg-none mb-3">--}}
{{--                        <div class="service-card pb-3 bg-white">--}}
{{--                            <div>--}}
{{--                                <div class="offer-head">--}}
{{--                                    <p class="fs-1 text-white fw-bold text-center mb-1">Pro</p>--}}
{{--                                    <p class="text-white text-center">No limit</p>--}}
{{--                                </div>--}}
{{--                                <p class="fs-1 fw-semibold text-center mb-1">349 zł</p>--}}
{{--                                <p class="text-center">NETTO MIESIĘCZNIE</p>--}}
{{--                                <div class="mx-auto offer-list">--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="images/Vector%203.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Do 10 pracowników</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="images/Vector%203.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="images/Vector%203.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                        <div class="rounded-circle offer-bullet text-center">--}}
{{--                                            <img src="images/Vector%203.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <p class="fs-5 fw-semibold">Pełna funkcjonalność aplikacji</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">--}}
{{--                                    <a class="btn btn-dark rounded-pill py-2 px-4">Wypróbuj </a>--}}
{{--                                    <a class="btn btn-transparent border border-dark border-2 rounded-pill py-2 px-4">więcej</a>--}}
{{--                                </div>--}}
{{--                                <p class="fw-semibold text-center mt-3 mb-0">30 dni za darmo!</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <p class="fs-5">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>--}}
{{--                </div>--}}
{{--                <div class="col-7 d-none d-lg-block">--}}
{{--                    <div class="service-card pb-3 bg-white">--}}
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
{{--                                        <img src="images/Vector%203.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Do 10 pracowników</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="images/Vector%203.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="images/Vector%203.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="images/Vector%203.png" alt="">--}}
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
{{--            </div>--}}
        </div>
    </div>
</div>
@include('components/footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="{{asset('js/main.js')}}"></script>
@endsection
