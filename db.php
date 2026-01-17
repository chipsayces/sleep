<?php
$conn = new mysqli("localhost", "root", "12345678", "auroracharm");

if ($conn->connect_error) {
    die("Database connection failed");
}
?>
