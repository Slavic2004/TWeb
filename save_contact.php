<?php
// Preia datele trimise prin POST
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Creează un array cu datele
$data = [
    'name' => $name,
    'email' => $email,
    'message' => $message,
    'timestamp' => date('Y-m-d H:i:s')
];

// Numele fișierului
$file = 'contacts.json';

// Citește fișierul existent
$contacts = [];

if (file_exists($file)) {
    $json = file_get_contents($file);
    $contacts = json_decode($json, true) ?? [];
}

// Adaugă noua înregistrare
$contacts[] = $data;

// Scrie în fișier
if (file_put_contents($file, json_encode($contacts, JSON_PRETTY_PRINT))) {
    echo "Mesaj trimis cu succes!";
} else {
    http_response_code(500);
    echo "Eroare la salvarea mesajului.";
}
?>
