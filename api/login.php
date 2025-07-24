<?php
header('Content-Type: application/json');

// Dummy login data (future me DB ya API se check hoga)
$valid_users = [
    "admin" => "1234",
    "demo" => "demo123"
];

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($valid_users[$username]) && $valid_users[$username] === $password) {
    echo json_encode([
        "success" => true,
        "message" => "Login successful!"
    ]);
} else {
    echo json_encode([
        "success" => false,
        "message" => "Invalid username or password"
    ]);
}
