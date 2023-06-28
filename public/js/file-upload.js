(function () {

    document.addEventListener('click', (e) => {
        if(e.target.classList.contains('file-overlay'))
        {
            document.querySelector('.file-container').classList.remove('opened')
        }
    })


    window.supportDrag = function() {
        let div = document.createElement('div');
        return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
    }();

    let input =  document.getElementById('js-file-input');

    if(!supportDrag){
        document.querySelectorAll('.has-drag')[0].classList.remove('has-drag');
    }

    input.addEventListener("change", function(e){
        // document.getElementById('js-file-name').innerHTML = this.files[0].name;
        // document.querySelectorAll('.file-input')[0].classList.remove('file-input--active');
        setTimeout(() => {
            document.getElementById('js-file-name').innerHTML = this.files[0].name;
            document.querySelectorAll('.file-input')[0].classList.remove('file-input--active');
        }, 0)
    }, false);

    if(supportDrag){
        input.addEventListener("dragenter", function(e) {
            document.querySelectorAll('.file-input')[0].classList.add('file-input--active');
        });

        input.addEventListener("dragleave", function(e) {
            document.querySelectorAll('.file-input')[0].classList.remove('file-input--active');
        });
    }

})();