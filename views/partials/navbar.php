<?php
session_start();
$role = $_SESSION['role'] ?? null;
?>

<nav class="bg-blue-500 text-white p-4">
    <ul class="flex justify-between">
        <li><a href="/dashboard/<?php echo strtolower($_SESSION['role']); ?>" class="hover:underline">Dashboard</a></li>
        <?php if ($_SESSION['role'] === 'Admin'): ?>
            <li><a href="/manage-users" class="hover:underline">Manage Users</a></li>
        <?php elseif ($_SESSION['role'] === 'Doctor'): ?>
            <li><a href="/appointments" class="hover:underline">Appointments</a></li>
        <?php elseif ($_SESSION['role'] === 'Nurse'): ?>
            <li><a href="/tasks" class="hover:underline">Tasks</a></li>
        <?php elseif ($_SESSION['role'] === 'Patient'): ?>
            <li><a href="/my-records" class="hover:underline">My Records</a></li>
        <?php endif; ?>
        <li><a href="/logout" class="hover:underline">Logout</a></li>
    </ul>
</nav>

