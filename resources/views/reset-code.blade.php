@extends('layout')
@section('title')
    Odzyskiwanie hasła
@endsection
@section('isLogin')
    <link rel="stylesheet" href="{{asset('styles/login.css')}}">
@endsection
@section('isCode')
    <link rel="stylesheet" href="{{asset('styles/reset-code.css')}}">
@endsection
@section('footer_style')
    style="position:absolute;bottom:0;left:0;width:100%"
@endsection


@section('content')
    <div class="container-fluid px-0">
        <div class="container-fluid header-container p-0">
            @include('components/header')
        </div>
        <div class="container mb-5">
            <form action="" class="authorization-form">
                <div class="inner-container">
                    <p class="text-start fs-2 fw-bold">Wprowadź kod autoryzacji</p>
                    <div class="mt-3">
                        <label class="form-label" for="code0">Wpisz kod z SMS-a</label>
                        <div class="custom-num-input d-flex column-gap-2 mt-3">
                            <input required type="number" class="border border-bottom border-0" name="code[]" id="code0" min="0" max="9">
                            <input required type="number" class="border border-bottom border-0" name="code[]" id="code1" min="0" max="9">
                            <input required type="number" class="border border-bottom border-0" name="code[]" id="code2" min="0" max="9">
                            <input required type="number" class="border border-bottom border-0" name="code[]" id="code3" min="0" max="9">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 mt-4 py-4 fs-5 rounded-pill">Wysłać</button>
                </div>
            </form>
        </div>
    </div>
    @include('components/footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script>
        let numInputs = document.querySelectorAll('input[name="code[]"]');
        let counter = 0;
        numInputs.forEach(function (element) {
            element.addEventListener('keydown', function (evt) {
                if(counter >= numInputs.length) {
                    return evt.target.value = null;
                }
                numInputs[counter].focus();
                counter += 1;
            })
        })
    </script>
@endsection
