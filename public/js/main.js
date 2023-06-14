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

let parent, clone
if($('#home-place').length > 0)
{
    parent = $('#edit-profile-edit').closest('.fs-4')
    clone = $('#edit-profile-edit').clone()
}
$('#home-place').click(async(e) => {

    if($(e.target).is('#edit-profile-edit'))
    {

        $('#edit-profile-edit').remove()
        $('span', parent).after('<button type="button" class="btn btn-dark py-1" id="save-profile-edit" style="font-size:12px;">save</button>');

        $('.profile-edit').each((pk, p) => {
            $(p).addClass('hidden')
        })
        $('.profile-edit-input').each((i, input) => {
            $(input).removeClass('hidden')
        })


    }
    if($(e.target).is('#save-profile-edit'))
    {
        let url = $('.profile-edit-form').attr('data-action')

        let dataFilter = new FormData();
        dataFilter.append('_token', $('.profile-edit-form').attr('data-token'))
        dataFilter.append('user_id', $('.profile-edit-form').attr('data-user'))
        dataFilter.append('title', $('#profile-edit-title').val())
        dataFilter.append('address', $('#profile-edit-address').val())
        dataFilter.append('nip', $('#profile-edit-nip').val())

        const request = await fetch(url, {
            method: 'POST',
            body: dataFilter
        })
        const result = await request.text()
        if(result.includes('SUCCESS'))
        {

            $('#profile-edit-title-p').html($('#profile-edit-title').val())
            $('#profile-edit-address-p').html($('#profile-edit-address').val())
            $('#profile-edit-nip-p').html($('#profile-edit-nip').val())
            $('.profile-edit').each((pk, p) => {
                $(p).removeClass('hidden')
            })
            $('.profile-edit-input').each((i, input) => {
                $(input).addClass('hidden')
            })

            $('#save-profile-edit').remove()

            $('span', parent).after(clone);
        }
    }

})





