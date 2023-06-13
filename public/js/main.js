document.addEventListener('DOMContentLoaded', function (){
    document.querySelectorAll('.offer-ctrl-btn').forEach(function (el){
        el.onclick = (ev) => {
            let prev = ev.target.parentNode.querySelector('.active');
            prev.classList.remove('active');
            let prevShowBox = document.getElementById(prev.getAttribute('bs-target'));
            prevShowBox.classList.remove('d-flex');
            prevShowBox.classList.add('d-none');
            ev.target.classList.add('active');
            let next = document.getElementById(ev.target.getAttribute('bs-target'));
            next.classList.add('d-flex');
            next.classList.remove('d-none');
        }
    })
})

