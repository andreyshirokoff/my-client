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
let code = 0
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

$(document).click(async(e) => {
    if($(e.target).is('.try-tariff'))
    {
        let url = $(e.target).attr('data-action')
        let block = $(e.target).closest('.tariff-block')

        let dataFilter = new FormData();
        dataFilter.append('_token', $(e.target).attr('data-token'))
        dataFilter.append('tariff_id', $(block).attr('data-id'))

        const request = await fetch(url, {
            method: 'POST',
            body: dataFilter
        })
        const result = await request.text()
        if(result.includes('SUCCESS'))
        {
            window.location.href = '/home';
        }
    }
    if($(e.target).is('.try-packet'))
    {
        let url = $(e.target).attr('data-action')
        let block = $(e.target).closest('.packet-block')

        let dataFilter = new FormData();
        dataFilter.append('_token', $(e.target).attr('data-token'))
        dataFilter.append('packet_id', $(block).attr('data-id'))

        const request = await fetch(url, {
            method: 'POST',
            body: dataFilter
        })
        const result = await request.text()
        if(result.includes('SUCCESS'))
        {
            window.location.href = '/home';
        }
    }
    if($(e.target).is('#tech-send-btn'))
    {
        $('input').each((i, inp) => {
            $(inp).css('box-shadow', 'none')
        })
        $('select').each((s, sel) => {
            $(sel).css('box-shadow', 'none')
        })
        $('textarea').each((t, tex) => {
            $(tex).css('box-shadow', 'none')
        })

        let boxShadow = '0 0 4px red'


        let block = $(e.target).closest('form')
        let url = $(block).attr('data-action')

        let name = $('#name', block).val()
        let phone = $('#phone', block).val()
        let email = $('#email', block).val()
        let text = $('#text', block).val()

        if(!validateEmail(email))
        {
            alert('Adres pocztowy jest nieprawidłowy. Przykład: example@gmail.com')
            $('#email', block).css('box-shadow', boxShadow)
        }

        if(!name) $('#name', block).css('box-shadow', boxShadow)
        if(!email) $('#email', block).css('box-shadow', boxShadow)
        if(!text) $('#text', block).css('box-shadow', boxShadow)

        let dataFilter = new FormData();
        dataFilter.append('_token', $(block).attr('data-token'))
        dataFilter.append('name', name)
        dataFilter.append('phone', phone)
        dataFilter.append('email', email)
        dataFilter.append('text', text)

        const request = await fetch(url, {
            method: 'POST',
            body: dataFilter
        })
        const result = await request.text()
        if(result.includes('SUCCESS'))
        {
            $('#name', block).val('')
            $('#phone', block).val('')
            $('#email', block).val('')
            $('#text', block).val('')
            notification('Żądanie wysłane pomyślnie')
        }
    }
    if($(e.target).is('#quest-send-btn'))
    {
        $('input').each((i, inp) => {
            $(inp).css('box-shadow', 'none')
        })
        $('select').each((s, sel) => {
            $(sel).css('box-shadow', 'none')
        })
        $('textarea').each((t, tex) => {
            $(tex).css('box-shadow', 'none')
        })

        let boxShadow = '0 0 4px red'


        let block = $(e.target).closest('form')
        let url = $(block).attr('data-action')

        let name = $('#name', block).val()
        let phone = $('#phone', block).val()

        if(!name) $('#name', block).css('box-shadow', boxShadow)
        if(!phone) $('#phone', block).css('box-shadow', boxShadow)

        let dataFilter = new FormData();
        dataFilter.append('_token', $(block).attr('data-token'))
        dataFilter.append('name', name)
        dataFilter.append('phone', phone)

        const request = await fetch(url, {
            method: 'POST',
            body: dataFilter
        })
        const result = await request.text()
        if(result.includes('SUCCESS'))
        {
            $('#name', block).val('')
            $('#phone', block).val('')
            notification('Żądanie wysłane pomyślnie')
        }
    }
    if($(e.target).is('#route-to-tariffs'))
    {
        window.location.href = '/home/packet-change';
    }
    if($(e.target).is('#route-to-packets'))
    {
        window.location.href = '/home/sms-packets';
    }

    if($(e.target).is('#send-sms-code'))
    {
        code = Math.floor(Math.random() * 9000) + 1000;
        $('#send-sms-code').remove()

        console.log(code)
        $('#submit-sms-code').after('<p class="text-center mt-4" id="reset-code-repeater">Wyślij ponownie po <span style="font-weight: 700;">120</span> minutach</p>');
        let count = 119
        let interval = setInterval(() => {
            $('#reset-code-repeater span').text(count);

            // Уменьшение значения счетчика
            count--;

            // Проверка, если счетчик достиг нуля, останавливаем обратный отсчет
            if (count < 0) {
                clearInterval(interval);
                $('#reset-code-repeater').remove()
                $('#submit-sms-code').after('<p class="text-center mt-4 text-decoration-underline" style="color:blue;cursor:pointer;" id="send-sms-code">Aby otrzymać kod</p>');
                code = 0
            }
        }, 1000);
    }
    if($(e.target).is('#submit-sms-code'))
    {
        let verifyCode = Number($('#code0').val() + $('#code1').val() + $('#code2').val() + $('#code3').val())

        if(verifyCode == code)
        {
            let block = $(e.target).closest('.authorization-form')
            let url = $(block).attr('data-action')
            let dataFilter = new FormData();
            dataFilter.append('_token', $(block).attr('data-token'))
            dataFilter.append('verifyCode', String(verifyCode))
            dataFilter.append('code', String(code))

            const request = await fetch(url, {
                method: 'POST',
                body: dataFilter
            })
            const result = await request.text()
            if(result.includes('SUCCESS'))
            {
                window.location.href = '/home';
            }
        }
        else
        {
            alert('Błędny kod')
        }
    }

})

function validateEmail(email) {
    // Регулярное выражение для проверки формата почтового адреса
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Проверяем соответствие строки регулярному выражению
    return emailRegex.test(email);
}

function notification(text)
{
    $('.confirm-message').css('display', 'block')
    $('.confirm-message').css('opacity', '1')
    $('.confirm-message').html(text)
    setTimeout(() => {
        document.querySelector('.confirm-message').opacity = '0'
        $('.confirm-message').css('display', 'none')
        $('.confirm-message').html('')
    }, 3000)
}

function updateCounter() {
    // Вывод значения счетчика на страницу
    $('#reset-code-repeater span').text(count);

    // Уменьшение значения счетчика
    count--;

    // Проверка, если счетчик достиг нуля, останавливаем обратный отсчет
    if (count < 0) {
        clearInterval(interval);
    }
}






