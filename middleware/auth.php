<?php
function checkRole($role) {
    session_start();
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== $role) {
        header("Location: /login");
        exit;
    }
}
?>
