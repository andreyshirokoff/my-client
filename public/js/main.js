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
$('#edit-profile-edit').click(() => {
    let parent = $('#edit-profile-edit').closest('.fs-4')
    let clone = $('#edit-profile-edit').clone()
    $('#edit-profile-edit').remove()
    $('span', parent).after('<button type="button" class="btn btn-dark py-1" style="font-size:12px;">save</button>');

    $('.profile-edit').each((pk, p) => {
        $(p).addClass('hidden')
    })
    $('.profile-edit-input').each((i, input) => {
        $(input).removeClass('hidden')
    })


})
