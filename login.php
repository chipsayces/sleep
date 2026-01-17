<?php
// TEMP LOGIN TEST (no database yet)

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    header("Location: menu.html");
    exit();
}

// fallback
header("Location: index.php");
exit();
