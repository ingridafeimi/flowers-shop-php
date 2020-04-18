
$('#input').focus(function () {
    $('#box').removeClass('d-none');
});

function click () {
    $('#box .emailElement').click(function () {

        var emri = $(this).text();

        $('#input').val(emri);
        $('#box').addClass('d-none');

    });
}

$.ajax ({

    method: 'GET',
    url: 'http://localhost/rose/emails.php',
    success: function (teDhena) {
        var email = JSON.parse(teDhena);

        for (var i = 0; i < email.length; i++){

            $('#box').append('<p class="py-2 emailElement">'+ email[i].email + '</p>');
        }

        click();
    }


})