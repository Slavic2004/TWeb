document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Oprește trimiterea implicită a formularului

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

    if (name === '') {
        alert('Te rog introdu un nume.');
        return;
    }
    if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
        alert('Te rog introdu o adresă de email validă.');
        return;
    }
    if (message === '') {
        alert('Te rog introdu un mesaj.');
        return;
    }

    alert('Formular trimis cu succes!');
    this.submit(); // Trimite formularul dacă validarea trece
});