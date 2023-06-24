@extends('user-layout')
@section('title')
    Zmień pakiet
@endsection
@section('isComponent')
    <link rel="stylesheet" href="{{asset('styles/components.css')}}">
@endsection
@section('btn2')
    active
@endsection

@section('acc-content')
    <p class="fs-5">Przy zmianie pakietu aktualne dni zostaną przeliczone według stawki miesięcznej (do
        wyższego lub niższego)</p>
    <div class="row row-gap-4 mt-4">
        @foreach(\App\Models\Tariff::getArray() as $tariff)
            @if($tariff->is_actual == 1)
                <div class="col-12 col-xl-6 tariff-block" data-id="{{$tariff->id}}">
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
{{--                                <div class="d-flex column-gap-2 align-items-center">--}}
{{--                                    <div class="rounded-circle offer-bullet text-center">--}}
{{--                                        <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <p class="fs-5 fw-semibold">1 pracownik</p>--}}
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
                            </div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">
                                @if(\App\Models\UserTariff::where('user_id', Auth::user()->id)->first())

                                    <a class="btn btn-secondary rounded-pill py-2 px-4" style="cursor:none;pointer-events: none;">Niedostępne</a>
                                @else
                                    <a data-action="{{route('try.tariff')}}" class="btn btn-dark try-tariff rounded-pill py-2 px-4" data-token="{{csrf_token()}}">Wypróbuj</a>
                                @endif
                                <a href="{{url('/price-page')}}?id={{strtolower($tariff->title)}}" class="btn btn-transparent border border-dark border-2 rounded-pill py-2 px-4">więcej</a>
                            </div>
                            <p class="fw-semibold text-center mt-3 mb-0">{{$tariff->trial}} dni za darmo!</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
{{--        <div class="col-12 col-xl-6">--}}
{{--            <div class="service-card pb-3">--}}
{{--                <div>--}}
{{--                    <div class="offer-head">--}}
{{--                        <p class="fs-1 text-white fw-bold text-center mb-1">Solo</p>--}}
{{--                        <p class="text-white text-center">Dla Ciebie</p>--}}
{{--                    </div>--}}
{{--                    <p class="fs-1 fw-semibold text-center mb-1">99 zł</p>--}}
{{--                    <p class="text-center">NETTO MIESIĘCZNIE</p>--}}
{{--                    <div class="mx-auto offer-list">--}}
{{--                        <div class="d-flex column-gap-2 align-items-center">--}}
{{--                            <div class="rounded-circle offer-bullet text-center">--}}
{{--                                <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <p class="fs-5 fw-semibold">1 pracownik</p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex column-gap-2 align-items-center">--}}
{{--                            <div class="rounded-circle offer-bullet text-center">--}}
{{--                                <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex column-gap-2 align-items-center">--}}
{{--                            <div class="rounded-circle offer-bullet text-center">--}}
{{--                                <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex column-gap-2 align-items-center">--}}
{{--                            <div class="rounded-circle offer-bullet text-center">--}}
{{--                                <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <p class="fs-5 fw-semibold">Pełna funkcjonalność aplikacji</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">--}}
{{--                        <a class="btn btn-dark rounded-pill py-2 px-4">Wypróbuj </a>--}}
{{--                        <a class="btn btn-transparent border border-dark border-2 rounded-pill py-2 px-4">więcej</a>--}}
{{--                    </div>--}}
{{--                    <p class="fw-semibold text-center mt-3 mb-0">30 dni za darmo!</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-12 col-xl-6">--}}
{{--            <div class="service-card pb-3">--}}
{{--                <div>--}}
{{--                    <div class="offer-head">--}}
{{--                        <p class="fs-1 text-white fw-bold text-center mb-1">Basic</p>--}}
{{--                        <p class="text-white text-center">Mały zespół</p>--}}
{{--                    </div>--}}
{{--                    <p class="fs-1 fw-semibold text-center mb-1">149 zł</p>--}}
{{--                    <p class="text-center">NETTO MIESIĘCZNIE</p>--}}
{{--                    <div class="mx-auto offer-list">--}}
{{--                        <div class="d-flex column-gap-2 align-items-center">--}}
{{--                            <div class="rounded-circle offer-bullet text-center">--}}
{{--                                <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <p class="fs-5 fw-semibold">Do 5 pracowników</p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex column-gap-2 align-items-center">--}}
{{--                            <div class="rounded-circle offer-bullet text-center">--}}
{{--                                <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex column-gap-2 align-items-center">--}}
{{--                            <div class="rounded-circle offer-bullet text-center">--}}
{{--                                <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex column-gap-2 align-items-center">--}}
{{--                            <div class="rounded-circle offer-bullet text-center">--}}
{{--                                <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <p class="fs-5 fw-semibold">Pełna funkcjonalność aplikacji</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">--}}
{{--                        <a class="btn btn-dark rounded-pill py-2 px-4">Wypróbuj </a>--}}
{{--                        <a class="btn btn-transparent border border-dark border-2 rounded-pill py-2 px-4">więcej</a>--}}
{{--                    </div>--}}
{{--                    <p class="fw-semibold text-center mt-3 mb-0">30 dni za darmo!</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-12 col-xl-6">--}}
{{--            <div class="service-card pb-3">--}}
{{--                <div>--}}
{{--                    <div class="offer-head position-relative">--}}
{{--                        <p class="fs-1 text-white fw-bold text-center mb-1">Medium</p>--}}
{{--                        <p class="text-white text-center">Duży zespół</p>--}}
{{--                        <div class="position-absolute discount-box">--}}
{{--                            <p>UDERZYĆ!</p>--}}
{{--                            <p class="sub-discount">Wybrany przez 60% klientów</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <p class="fs-1 fw-semibold text-center mb-1">229 zł</p>--}}
{{--                    <p class="text-center">NETTO MIESIĘCZNIE</p>--}}
{{--                    <div class="mx-auto offer-list">--}}
{{--                        <div class="d-flex column-gap-2 align-items-center">--}}
{{--                            <div class="rounded-circle offer-bullet text-center">--}}
{{--                                <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <p class="fs-5 fw-semibold">Do 5 pracowników</p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex column-gap-2 align-items-center">--}}
{{--                            <div class="rounded-circle offer-bullet text-center">--}}
{{--                                <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex column-gap-2 align-items-center">--}}
{{--                            <div class="rounded-circle offer-bullet text-center">--}}
{{--                                <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex column-gap-2 align-items-center">--}}
{{--                            <div class="rounded-circle offer-bullet text-center">--}}
{{--                                <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <p class="fs-5 fw-semibold">Pełna funkcjonalność aplikacji</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">--}}
{{--                        <a class="btn btn-dark rounded-pill py-2 px-4">Wypróbuj </a>--}}
{{--                        <a class="btn btn-transparent border border-dark border-2 rounded-pill py-2 px-4">więcej</a>--}}
{{--                    </div>--}}
{{--                    <p class="fw-semibold text-center mt-3 mb-0">30 dni za darmo!</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-12 col-xl-6">--}}
{{--            <div class="service-card pb-3">--}}
{{--                <div>--}}
{{--                    <div class="offer-head">--}}
{{--                        <p class="fs-1 text-white fw-bold text-center mb-1">Pro</p>--}}
{{--                        <p class="text-white text-center">No limit</p>--}}
{{--                    </div>--}}
{{--                    <p class="fs-1 fw-semibold text-center mb-1">349 zł</p>--}}
{{--                    <p class="text-center">NETTO MIESIĘCZNIE</p>--}}
{{--                    <div class="mx-auto offer-list">--}}
{{--                        <div class="d-flex column-gap-2 align-items-center">--}}
{{--                            <div class="rounded-circle offer-bullet text-center">--}}
{{--                                <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <p class="fs-5 fw-semibold">Do 10 pracowników</p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex column-gap-2 align-items-center">--}}
{{--                            <div class="rounded-circle offer-bullet text-center">--}}
{{--                                <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <p class="fs-5 fw-semibold">Bez zobowiązań</p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex column-gap-2 align-items-center">--}}
{{--                            <div class="rounded-circle offer-bullet text-center">--}}
{{--                                <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <p class="fs-5 fw-semibold">Bezpłatna pomoc techniczna</p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex column-gap-2 align-items-center">--}}
{{--                            <div class="rounded-circle offer-bullet text-center">--}}
{{--                                <img src="{{ asset('images/Vector%203.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <p class="fs-5 fw-semibold">Pełna funkcjonalność aplikacji</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-2 mt-4 px-5">--}}
{{--                        <a class="btn btn-dark rounded-pill py-2 px-4">Wypróbuj </a>--}}
{{--                        <a class="btn btn-transparent border border-dark border-2 rounded-pill py-2 px-4">więcej</a>--}}
{{--                    </div>--}}
{{--                    <p class="fw-semibold text-center mt-3 mb-0">30 dni za darmo!</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
