<?php ?>
<footer @yield('footer_style')>
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-center column-gap-5">
            <div class="col-12 col-md-5">
                <p class="text-white logo-text fw-bold"><img style="height: 40px;margin-right: 30px;transform: translateY(-5px)" src="{{asset('images/logo_my 1.svg')}}" alt=""> MyClient</p>
                <p class="text-white">KRS 0000944954, NIP 5361959287, REGON 52096244600000
                    ul. WOLSKA 36
                    05-119 STANISŁAWÓW DRUGI</p>
            </div>
            <div class="mx-auto">
                <p><a href="{{url('/#o-aplikacji')}}" class="text-decoration-none text-white">O aplikacji</a></p>
                <p><a href="{{url('/#dlaczego-warto')}}" class="text-decoration-none text-white">Dlaczego warto?</a></p>
                <p><a href="{{url('/price-page')}}" class="text-decoration-none text-white">Cennik</a></p>
                <p><a href="{{url('/#pierwsze-kroki')}}" class="text-decoration-none text-white">Pierwsze kroki</a></p>
                <p><a href="{{url('/#faq')}}" class="text-decoration-none text-white">FAQ</a></p>
            </div>
            <div class="mx-auto">
                <p class="text-white fw-normal fs-5">
                    +48 888 888 233<br/>
                    Pon. - Pt. 9:00 - 17:00<br/>
                    kontakt@myсlient.pl
                </p>
                <div class="d-flex column-gap-4 w-100">
                    <a class="bg-light d-flex align-items-center justify-content-center rounded-2" style="width: 36px; height: 36px">
                        <img width="24px" src="{{asset('images/instagram-black.svg')}}" alt="">
                    </a>
                    <a class="bg-light d-flex align-items-center justify-content-center rounded-2" style="width: 36px; height: 36px">
                        <img width="14px" src="{{asset('images/facebook-f-black.svg')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
