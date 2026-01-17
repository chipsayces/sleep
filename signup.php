<?php
include 'db.php'; // your database connection

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // TEMP: no hashing yet (we'll improve later)
    $sql = "INSERT INTO users (username, password)
            VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AuroraCharm | Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-pink-100">

<form method="POST"
      class="bg-white p-10 rounded-3xl shadow-xl w-96 text-center">

    <h1 class="text-4xl font-bold text-pink-500 mb-6">🌸 Sign Up</h1>

    <input type="text" name="username" placeholder="Username"
           class="w-full mb-4 p-3 rounded-xl border" required>

    <input type="password" name="password" placeholder="Password"
           class="w-full mb-6 p-3 rounded-xl border" required>

    <button type="submit"
            class="bg-pink-500 text-white w-full py-3 rounded-full font-bold hover:bg-pink-600">
        Create Account ✨
    </button>

    <p class="mt-4 text-sm">
        Already have an account?
        <a href="index.php" class="text-pink-500 font-bold">Login</a>
    </p>
</form>

</body>
</html>
