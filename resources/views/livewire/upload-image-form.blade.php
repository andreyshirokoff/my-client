<div class="mt-2">
    <form class="ava-form" wire:submit.prevent="save" enctype="multipart/form-data" style="display:flex;flex-direction:column;width: 307px;height: 250px;">
{{--        <input type="file" wire:model="image" class="file-input" >--}}
        <div class="file-container">
            <div class="file-overlay"></div>
            <div class="file-wrapper"><input
                    wire:model.defer="image"
{{--                        wire:model.debounce.1000ms="image"--}}
{{--                    wire:change="$emit('fileChoosen')"--}}
                    class="file-input"
                    id="js-file-input"
                    type="file" />
                <div class="file-content">
                    <div class="file-infos">
                        <p class="file-icon">
{{--                            <i class="fas fa-file-upload fa-1x"></i>--}}
                            <span class="icon-shadow"></span><span>Browse</span></p>
                    </div>
                    <p class="file-name" id="js-file-name">No file selected</p>
                </div>
            </div>
        </div>
{{--        @error('image') <span class="error mt-2">{{ $message }}</span> @enderror--}}
        @error('image')
        <script>
            fileUploadError("{{$message}}")
        </script>
        @enderror
        <button type="submit" id="send-image-btn" class="mt-3 btn btn-dark rounded-pill">Wgrywać</button>
    </form>
</div>


{{--<script>--}}

{{--    (function () {--}}

{{--        document.addEventListener('click', (e) => {--}}
{{--            if(e.target.classList.contains('file-overlay'))--}}
{{--            {--}}
{{--                document.querySelector('.file-container').classList.remove('opened')--}}
{{--            }--}}
{{--        })--}}


{{--        window.supportDrag = function() {--}}
{{--            let div = document.createElement('div');--}}
{{--            return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;--}}
{{--        }();--}}

{{--        let input =  document.getElementById('js-file-input');--}}

{{--        if(!supportDrag){--}}
{{--            document.querySelectorAll('.has-drag')[0].classList.remove('has-drag');--}}
{{--        }--}}

{{--        input.addEventListener("change", function(e){--}}
{{--            // document.getElementById('js-file-name').innerHTML = this.files[0].name;--}}
{{--            // document.querySelectorAll('.file-input')[0].classList.remove('file-input--active');--}}
{{--            setTimeout(() => {--}}
{{--                document.getElementById('js-file-name').innerHTML = this.files[0].name;--}}
{{--                document.querySelectorAll('.file-input')[0].classList.remove('file-input--active');--}}
{{--            }, 1000)--}}
{{--        }, false);--}}

{{--        if(supportDrag){--}}
{{--            input.addEventListener("dragenter", function(e) {--}}
{{--                document.querySelectorAll('.file-input')[0].classList.add('file-input--active');--}}
{{--            });--}}

{{--            input.addEventListener("dragleave", function(e) {--}}
{{--                document.querySelectorAll('.file-input')[0].classList.remove('file-input--active');--}}
{{--            });--}}
{{--        }--}}

{{--    })();--}}
{{--</script>--}}
