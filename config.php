<?php
$host = "sql308.infinityfree.com";
$user = "if0_43163697";
$pass = "vn3uzBWKqFPZl";
$db   = "if0_43163697_ank_assigmnent2";

mysqli_report(MYSQLI_REPORT_OFF);
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Database connection failed. Check config.php.");
}
$conn->set_charset("utf8mb4");
