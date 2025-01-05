<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/tailwind.css" rel="stylesheet">
    <title>HMS|Login</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
            <h1 class="text-2xl font-bold mb-4">Login</h1>
            <?php if (isset($error)): ?>
                <p class="text-red-500 mb-4"><?php echo $error; ?></p>
            <?php endif; ?>
            <form id="loginForm" method="POST" action="controllers/login_controller.php">
                <input type="email" id="email" name="email" placeholder="Email" class="w-full p-2 border mb-4 rounded" required>
                <input type="password" id="password" name="password" placeholder="Password" class="w-full p-2 border mb-4 rounded" required>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Login</button>
            </form>
        </div>
    </div>

    <script>
        // Client-side validation
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();

            if (!email || !password) {
                alert("Both email and password are required!");
                event.preventDefault(); // Stop form submission
                return;
            }

            // Check email format
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address!");
                event.preventDefault();
                return;
            }
        });
    </script>
</body>
</html>
