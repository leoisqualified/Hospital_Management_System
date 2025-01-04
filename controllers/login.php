<?php
session_start();
require '../db/db_connect.php';

$error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validation: Check for empty fields
    if (empty($email) || empty($password)) {
        $error = "Email and password are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Validation: Check for valid email format
        $error = "Invalid email format!";
    } else {
        // If validation passes, query the database
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $user['password'])) {
                // Store user info in session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['name'] = $user['name'];

                // Redirect to dashboard
                header("Location: ../dashboard");
                exit;
            } else {
                $error = "Invalid password!";
            }
        } else {
            $error = "Account does not exist!";
        }
    }
}

require './views/login.view.php';
?>
