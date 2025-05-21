$(document).ready(function () {
    $('#contactForm').submit(function (e) {
        e.preventDefault(); // Previne trimiterea normală

        $.ajax({
            type: 'POST',
            url: 'save_contact.php',
            data: $(this).serialize(),
            success: function (response) {
                $('#response').html('<p style="color:green;">' + response + '</p>');
                $('#contactForm')[0].reset(); // Resetează formularul
            },
            error: function () {
                $('#response').html('<p style="color:red;">Eroare la trimiterea mesajului.</p>');
            }
        });
    });
});
