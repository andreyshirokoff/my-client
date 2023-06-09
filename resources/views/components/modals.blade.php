<?php ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog callback-modal container">
        <div class="modal-content border border-2 border-dark">
            <form class="" action="">
                <button data-bs-dismiss="modal" type="button" class="btn-close position-absolute rounded-circle p-2" aria-label="Close"></button>
                <p class="fs-2 f-montserat fw-semibold text-center">Wypełnij formularz, a nasz menedżer wkrótce się z Tobą
                    skontaktuje</p>
                <div class="d-flex flex-column flex-lg-row column-gap-4 px-5 mt-6">
                    <div class="col-12 col-lg-6">
                        <label for="name" class="form-label text-start">Wpisz swoje imię</label>
                        <input required type="text" name="name" id="name" class="form-control custom-input" placeholder="Константин">
                    </div>
                    <div class="col-12 col-lg-6">
                        <label for="name" class="form-label text-end">Wprowadź swój numer telefonu</label>
                        <input required type="tel" name="name" id="name" class="form-control custom-input" placeholder="+ 456 54 54 54">
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-6">
                    <button type="submit" class="btn btn-dark fs-5 py-3 fw-semibold px-5 rounded-pill">Wysłać</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="okModal" tabindex="-1" aria-labelledby="okModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content border border-2 border-dark py-5">
            <form class="" action="">
                <p class="fs-4 f-montserat fw-semibold text-center">Dziękujemy za twoje pytanie!</p>
                <p class="text-center">Twoja prośba została wysłana do kierownika, wkrótce się z Tobą skontaktuje</p>
                <div class="d-flex justify-content-center">
                    <img src="images/tick%201%20(Traced).png" alt="">
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-dark fs-5 py-3 fw-semibold px-5 rounded-pill">Dobrze</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="signOutModal" tabindex="-1" aria-labelledby="signOutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content border border-2 border-dark py-5">
            <form class="" action="">
                <button data-bs-dismiss="modal" type="button" class="btn-close position-absolute rounded-circle p-2" aria-label="Close"></button>
                <p class="fs-4 f-montserat fw-semibold text-center">Czy na pewno chcesz się wylogować ze swojego konta osobistego?</p>
                <div class="d-flex justify-content-center flex-column flex-md-row row-gap-2 column-gap-4 mt-4">
                    <button class="btn btn-dark rounded-pill py-3 px-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Wyloguj</button>
                    <a class="btn btn-transparent border border-dark border-2 rounded-pill py-3 px-5">Anulowanie</a>
                </div>
            </form>
        </div>
    </div>
</div>