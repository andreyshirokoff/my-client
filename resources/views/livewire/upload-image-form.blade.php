<div class="mt-2">
    <a href="{{url('/home')}}?action=upload-image" class="ava-mes text-center" style="width:160px;@if(isset($_GET['action']) && $_GET['action'] == 'upload-image')display:none @else display:block @endif">Umieść awatar</a>
    <form class="ava-form" wire:submit.prevent="save" enctype="multipart/form-data" style="@if(isset($_GET['action']) && $_GET['action'] == 'upload-image')display:flex @else display:none @endif;flex-direction:column;width:160px">
        <input type="file" wire:model="image" class="file-input" >
{{--        <button type="button" class="file-input-helper btn btn-dark" style="width: 60%;font-size: 12px;">Wybierz plik</button>--}}
        @error('image') <span class="error mt-2">{{ $message }}</span> @enderror
        <button type="submit" class="mt-2 btn btn-dark rounded-pill">Wgrywać</button>
    </form>
</div>
