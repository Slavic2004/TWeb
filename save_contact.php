<?php
// Preia datele din formular
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Creează un array asociativ
$data = [
    'name' => $name,
    'email' => $email,
    'message' => $message,
    'timestamp' => date('Y-m-d H:i:s')
];

// Citește conținutul actual din fișierul JSON
$file = 'contacts.json';
$contacts = [];

if (file_exists($file)) {
    $json = file_get_contents($file);
    $contacts = json_decode($json, true) ?? [];
}

// Adaugă noul contact
$contacts[] = $data;

// Salvează înapoi în fișierul JSON
file_put_contents($file, json_encode($contacts, JSON_PRETTY_PRINT));

// Redirecționează utilizatorul către index.php
header("Location: index.php");
exit;
?>
