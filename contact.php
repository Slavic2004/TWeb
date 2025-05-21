<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Bet - Contacte</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>

    <header>
        <h1>Sport Bet</h1>
        <p>Unde pasiunea pentru sport devine realitate!</p> 
    </header>

    <!-- Bara de navigare adăugată -->
    <nav>
        <a href="index.php">Acasă</a>
        <a href="noutati.php">Noutăți</a>
        <a href="meciuri.php">Meciuri</a>
        <a href="contact.php">Contact</a>
    </nav>

    <div class="container">
        <h1>Contactează-ne</h1>
        <div class="contact-info">
            <div>
                <h3>Adresă</h3>
                <p>Str. Exemplu nr. 7, Chisinau, Moldova</p>
            </div>
            <div>
                <h3>Telefon</h3>
                <p>+373 67902522</p>
            </div>
            <div>
                <h3>Email</h3>
                <p>contact@sportbet.md</p>
            </div>
        </div>

        <h2>Formular de Contact</h2>
        <form id="contactForm" method="POST">
    <label for="name">Nume:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="message">Mesaj:</label><br>
    <textarea id="message" name="message" rows="4" required></textarea><br><br>

    <input type="submit" value="Trimite">
    </form>

    <div id="response"></div> <!-- Pentru răspunsul serverului -->

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/contact.js"></script>

    <footer>
        <p>&copy; 2025 Sport Bet. Toate drepturile rezervate.</p>
    </footer>

</body>
</html>
