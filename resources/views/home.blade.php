@extends('user-layout')
@section('title')
    Obszar osobisty
@endsection
@section('btn1')
    active
@endsection

@section('acc-content')
    <div class="d-flex column-gap-5 flex-column flex-lg-row row-gap-4">
        <div class="img-wrapper user-img-container">
            <img src="{{asset('images/user-solid-grey.png')}}" alt="" class="user-img">
        </div>
        <div class="info-container">
            <div class="d-flex flex-column flex-md-row justify-content-start column-gap-5 mb-2">
                <div>
                    <p class="fs-4 fw-semibold mb-1">Twoje konto:</p>
                    <p class="fs-5 mb-1">{{ Auth::user()->name }}</p>
                    <p class="fs-5 mb-1">Właściciel</p>
                </div>
                <div>
                    <p class="fs-4 fw-semibold mb-1">Telefon</p>
                    <p class="fs-5">{{ Auth::user()->phone }}</p>
                </div>
            </div>
            <p class="fs-4 fw-semibold mb-1">Email</p>
            <p class="fs-5">{{ Auth::user()->email }}</p>
            <p class="fs-4 fw-semibold" style="display:flex;gap:20px;align-items: center" id="home-place"><span>Dane do faktur:</span><i style="font-size: 14px;cursor: pointer" id="edit-profile-edit" class="fa-sharp fa-solid fa-pencil"></i></p>
            <div class="d-flex column-gap-5">
                <div>
                    <p class="fs-5 fw-semibold">Tytuł:</p>
                    <p class="fs-5 fw-semibold">Аdres:</p>
                    <p class="fs-5 fw-semibold">NIP:</p>
                </div>
                <div data-user="{{Auth::user()->id}}" data-action="{{route('add.req')}}" data-token="{{csrf_token()}}" class="profile-edit-form">

                    <p class="fs-5 profile-edit" id="profile-edit-title-p">@if($userRequisite){{$userRequisite->title}}@else @endif</p>
                    <input class="form-control profile-edit-input hidden" id="profile-edit-title" style="margin-bottom:10px" type="text" value="@if($userRequisite){{$userRequisite->title}}@else @endif">
                    <p class="fs-5 profile-edit" id="profile-edit-address-p">@if($userRequisite){{$userRequisite->address}}@else @endif</p>
                    <input class="form-control profile-edit-input hidden" id="profile-edit-address" style="margin-bottom:10px" type="text" value="@if($userRequisite){{$userRequisite->address}}@else @endif">
                    <p class="fs-5 profile-edit" id="profile-edit-nip-p">@if($userRequisite){{$userRequisite->nip}}@else @endif</p>
                    <input class="form-control profile-edit-input hidden" id="profile-edit-nip" type="text" value="@if($userRequisite){{$userRequisite->nip}}@else @endif">
                </div>
            </div>
            <a href="{{url('/home/password')}}" class="btn btn-dark rounded-pill" id="change-pwd-btn">Zmień hasło</a>
        </div>
    </div>
    <p class="fw-bold fs-2 mt-5">Twoja aplikacja Clientcard</p>
    <div class="row row-gap-3">
        <div class="col-12 col-lg-4">
            <div class="d-flex flex-column mx-auto">
                <p class="fs-5 fw-semibold">Twój pakiet:</p>
                <p class="fs-5">Pakiet Solo</p>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <p class="fs-5 fw-semibold">Twój pakiet:</p>
            <p class="fs-5">Pakiet Solo</p>
            <button class="btn btn-dark rounded-pill personal-btn mb-3">Rozszerzyć dostęp</button>
        </div>
        <div class="col-12 col-lg-4">
            <p class="fs-5 fw-semibold">Twój pakiet SMS:</p>
            <p class="fs-5">100 sms</p>
            <button class="btn btn-dark rounded-pill personal-btn">Doładowanie SMS</button>
        </div>
    </div>
    <p class="fw-bold fs-2 mt-5">Historia zamówień</p>
    <div id="order-history">
        <p>10.12.2022</p>
        <p class="fs-5 fw-semibold">Zakup pakietu Solo</p>
        <p>10.12.2022</p>
        <p class="fs-5 fw-semibold">Zakup pakietu 100 SMS</p>
    </div>
@endsection


