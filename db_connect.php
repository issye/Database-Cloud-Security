<?php
$serverName = "localhost";
$database = "vet_clinic";
$username = "vet_app_user";
$password = "VetSecurePass2026!";

try {
    $conn = new PDO(
        "sqlsrv:Server=$serverName;Database=$database",
        $username,
        $password
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>