@include('components/modals')
<header class="container-fluid">
    <div class="upper-header d-none d-md-flex justify-content-center">
        <div class="">
            <img src="{{ asset('images/Vector (1).png') }}" alt="">
            <span class="ms-3 fs-5">Pon. - Pt. 9:00 - 17:00</span>
        </div>
        <div class="">
            <svg width="29px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
            </svg>
            <span class="ms-2 fs-5">kontakt@myclient.pl</span>
        </div>
        <div class="">
            <div class="d-flex column-gap-3">
                <a class="bg-dark d-flex align-items-center justify-content-center rounded-2" style="width: 36px; height: 36px">
                    <img width="24px" src="{{ asset('images/instagram 1.png') }}" alt="">
                </a>
                <a class="bg-dark d-flex align-items-center justify-content-center rounded-2" style="width: 36px; height: 36px">
                    <img width="14px" src="{{ asset('images/fbook.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid justify-content-center column-gap-0 column-gap-xl-5">
                <a class="navbar-brand logo-text me-5 me-lg-2" style="line-height: 1;display: flex;height: 50px;" href="{{url('/')}}"><img style="height: 40px;" src="{{asset('images/logo_my.svg')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 row-gap-2 column-gap-lg-1 column-gap-xxl-3 align-items-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/#o-aplikacji')}}">O aplikacji</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/#dlaczego-warto')}}">Dlaczego warto?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/price-page')}}">Cennik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/#pierwsze-kroki')}}">Pierwsze kroki</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/#faq')}}">FAQ</a>
                        </li>
{{--                        remove--}}
                        @guest
                            <li class="d-none d-lg-block nav-item text-center rounded-2" style="padding-top: 7px; height: 43px; width: 52px;background:#173F35;">
                            <a href="{{ route('login') }}">

                                <img width="23px" src="{{asset('images/user-regular.png')}}" alt="">
                            </a>
                            </li>



                            <li class="nav-item">
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" class=" py-3 px-3 btn btn-dark rounded-pill">Wypróbuj za 0 zł</a>
                            </li>
                        @else
                            <li class="d-lg-block nav-item text-center rounded-2 px-3" style="padding-top: 7px; height: 43px;background:#173F35;">
                            <a href="{{url('/home')}}" style="color:white;text-decoration:none;" class="d-flex align-items-center">

                                    <img width="23px" src="{{asset('images/user-regular.png')}}" alt=""><span style="margin-left:10px">{{Auth::user()->name}}</span>

                            </a>
                            </li>


                            <li class="nav-item" style="cursor:pointer">
                                <a href="{{ route('logout') }}" class=" py-3 px-3 " style="text-decoration: none;color:black;" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <img src="{{asset('images/logout 1.svg')}}" alt="">
                                    Wyloguj
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
