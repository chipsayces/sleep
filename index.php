<?php
session_start();
include 'db.php';

$error = "";

// SIGN UP
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = $conn->query("SELECT id FROM users WHERE email='$email'");
    if ($check->num_rows > 0) {
        $error = "Email already exists. Please sign in.";
    } else {
        $conn->query("INSERT INTO users (name, email, password)
                      VALUES ('$name', '$email', '$password')");
        $_SESSION['user'] = $name;
        header("Location: menu.php");
        exit();
    }
}

// SIGN IN
if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user['name'];
        header("Location: menu.php");
        exit();
    } else {
        $error = "Invalid email or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>AuroraCharm — Sign In / Sign Up</title>

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Inter:wght@400;700;900&display=swap" rel="stylesheet">

<style>
body {
  font-family: Inter, system-ui;
  background-image: url(images/bg3.jpg);
  background-size: cover;
  min-height:100vh;
}
.card {
  max-width: 900px;
  margin: 48px auto;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 10px 40px rgba(15,15,15,0.08);
}
.logo { font-family: "Luckiest Guy", cursive; }
.input-focus:focus {
  outline: none;
  box-shadow: 0 6px 24px rgba(255,64,129,0.12);
}
</style>
</head>

<body>

<div class="card bg-white grid grid-cols-1 md:grid-cols-2">

<!-- LEFT -->
<div class="p-10 bg-gradient-to-br from-pink-50 to-yellow-50 flex flex-col justify-center">
  <h1 class="logo text-4xl text-pink-500 mb-3">✨ AuroraCharm</h1>
  <p class="text-lg font-semibold text-purple-800 mb-6">
    Sign in or create an account to enter the Sparkle Sale Event !! ◝(ᵔᗜᵔ)◜
  </p>
  <ul class="space-y-2 text-sm text-purple-700">
    <li>☆ Access exclusive sale content (˶˃𐃷˂˶)</li>
    <li>☆ Save items to your cart ꉂ(˵˃ ᗜ ˂˵)</li>
    <li>☆ Join the VIP Charm Club ദ്ദി(˵ •̀ ᴗ - ˵ ) ✧</li>
  </ul>
</div>

<!-- RIGHT -->
<div class="p-8">

<h2 class="logo text-3xl text-purple-800 mb-4">
  Welcome back !! (˶ˆᗜˆ˵)
</h2>

<?php if ($error): ?>
<p class="text-red-600 mb-4"><?= $error ?></p>
<?php endif; ?>

<div class="mb-4">
  <div class="flex rounded-xl overflow-hidden border-2 border-pink-100">
    <button onclick="showSignIn()" class="w-1/2 py-3 font-semibold bg-white">❥ Sign In</button>
    <button onclick="showSignUp()" class="w-1/2 py-3 font-semibold bg-pink-100">❥ Sign Up</button>
  </div>
</div>

<!-- SIGN IN -->
<div id="signInPanel">
<form method="POST" class="space-y-4">
  <div>
    <label class="block text-sm font-medium mb-1">Email</label>
    <input name="email" type="email" required
      class="w-full p-3 rounded-lg border input-focus"
      placeholder="you@example.com">
  </div>
  <div>
    <label class="block text-sm font-medium mb-1">Password</label>
    <input name="password" type="password" required
      class="w-full p-3 rounded-lg border input-focus"
      placeholder="Your password">
  </div>
  <button name="signin"
    class="bg-pink-500 text-white px-5 py-2 rounded-full font-semibold shadow">
    Sign In
  </button>
</form>
</div>

<!-- SIGN UP -->
<div id="signUpPanel" class="hidden">
<form method="POST" class="space-y-4">
  <div>
    <label class="block text-sm font-medium mb-1">Display name</label>
    <input name="name" type="text" required
      class="w-full p-3 rounded-lg border input-focus"
      placeholder="AuroraFan">
  </div>
  <div>
    <label class="block text-sm font-medium mb-1">Email</label>
    <input name="email" type="email" required
      class="w-full p-3 rounded-lg border input-focus"
      placeholder="you@example.com">
  </div>
  <div>
    <label class="block text-sm font-medium mb-1">Password</label>
    <input name="password" type="password" required
      class="w-full p-3 rounded-lg border input-focus"
      placeholder="Create a password">
  </div>
  <button name="signup"
    class="bg-pink-500 text-white px-5 py-2 rounded-full font-semibold shadow">
    Create Account
  </button>
</form>
</div>

<div class="mt-6 text-center text-sm text-gray-500">
  By continuing you agree to our
  <span class="text-pink-500 underline">Terms & Privacy</span>.
</div>

</div>
</div>

<script>
function showSignIn() {
  document.getElementById('signInPanel').classList.remove('hidden');
  document.getElementById('signUpPanel').classList.add('hidden');
}
function showSignUp() {
  document.getElementById('signUpPanel').classList.remove('hidden');
  document.getElementById('signInPanel').classList.add('hidden');
}
</script>

</body>
</html>

