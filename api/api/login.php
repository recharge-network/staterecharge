<?php
header('Content-Type: application/json');

// Static user list for testing
$valid_users = [
    "admin" => "1234",
    "demo" => "demo123"
];

// Read POST values
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Check credentials
if (isset($valid_users[$username]) && $valid_users[$username] === $password) {
    echo json_encode([
        "success" => true,
        "message" => "Login successful"
    ]);
} else {
    echo json_encode([
        "success" => false,
        "message" => "Invalid username or password"
    ]);
}
