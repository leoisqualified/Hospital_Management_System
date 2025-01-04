<?php
session_start();
$role = $_SESSION['role'] ?? null;
?>

<nav class="bg-gray-800 text-white px-4 py-3">
    <div class="container mx-auto flex justify-between">
        <a href="index.php" class="text-lg font-semibold">HMS</a>
        <ul class="flex space-x-4">
            <?php if ($role === 'admin'): ?>
                <li><a href="user_management.php" class="hover:text-gray-400">User Management</a></li>
            <?php elseif ($role === 'doctor'): ?>
                <li><a href="appointments.php" class="hover:text-gray-400">Appointments</a></li>
            <?php elseif ($role === 'nurse'): ?>
                <li><a href="monitoring.php" class="hover:text-gray-400">Patient Monitoring</a></li>
            <?php elseif ($role === 'patient'): ?>
                <li><a href="book_appointment.php" class="hover:text-gray-400">Book Appointment</a></li>
            <?php endif; ?>
            <?php if ($role): ?>
                <li><a href="logout.php" class="hover:text-gray-400">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php" class="hover:text-gray-400">Login</a></li>
                <li><a href="register.php" class="hover:text-gray-400">Register</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
