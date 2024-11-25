<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $staff_id = $_POST['staff_id'] ?? '';
    $password = $_POST['password'] ?? '';

    // Mock authentication: Replace with database connection and validation.
    $validStaffID = "admin"; // Example ID
    $validPassword = "password123"; // Example password

    if ($staff_id === $validStaffID && $password === $validPassword) {
        $_SESSION['user'] = $staff_id;
        echo json_encode(['formData' => 'success']);
    } else {
        echo json_encode(['formData' => 'error']);
    }
    exit;
}
?>
