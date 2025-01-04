<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/tailwind.css" rel="stylesheet">
    <title>HMS|Register</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
            <h1 class="text-2xl font-bold mb-4">Register</h1>
            <?php if (isset($error)): ?>
                <p class="text-red-500 mb-4"><?php echo $error; ?></p>
            <?php endif; ?>
            <?php if ($success): ?>
                <p class="text-green-500 mb-4">Registration successful! Redirecting to login...</p>
            <?php endif; ?>
            <form method="POST" action="/register">
                <input type="text" name="name" placeholder="Full Name" class="w-full p-2 border mb-4 rounded" required>
                <input type="email" name="email" placeholder="Email" class="w-full p-2 border mb-4 rounded" required>
                <input type="password" name="password" placeholder="Password" class="w-full p-2 border mb-4 rounded" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" class="w-full p-2 border mb-4 rounded" required>
                <select name="role" class="w-full p-2 border mb-4 rounded" required>
                    <option value="">Select Role</option>
                    <option value="Admin">Admin</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Nurse">Nurse</option>
                    <option value="Patient">Patient</option>
                </select>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
