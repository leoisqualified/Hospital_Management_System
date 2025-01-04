<?php

$routes = [
    '/' => function() {
        require 'views/home.php'; // Homepage
    },
    '/login' => function() {
        require 'controllers/LoginController.php'; // Login 
    },
    '/register' => function() {
        require 'controllers/RegisterController.php'; // Registration 
    },
    '/dashboard' => function() {
        require 'controllers/DashboardController.php'; // Role-based dashboard
    },
    
];
?>
