<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Collect input
    $pet_name = trim($_POST['pet_name'] ?? '');
    $species  = trim($_POST['species'] ?? '');
    $owner    = trim($_POST['owner_name'] ?? '');
    $contact  = trim($_POST['owner_contact'] ?? '');
    $age      = trim($_POST['age'] ?? '');

    // Server-side input validation
    if (
        empty($pet_name) ||
        empty($species) ||
        empty($owner) ||
        empty($contact) ||
        empty($age)
    ) {
        die("Invalid input detected.");
    }

    // Insert using prepared statement
    $stmt = $conn->prepare("
        INSERT INTO pets (pet_name, species, owner_name, owner_contact, age)
        VALUES (?, ?, ?, ?, ?)
    ");

    $stmt->execute([
        $pet_name,
        $species,
        $owner,
        $contact,
        $age
    ]);

    header("Location: receptionist_dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Pet (Receptionist)</title>
</head>
<body>

<h2>Add Pet Record</h2>

<form method="post">
    Pet Name: <input type="text" name="pet_name" required><br><br>
    Species: <input type="text" name="species" required><br><br>
    Owner Name: <input type="text" name="owner_name" required><br><br>
    Contact: <input type="text" name="owner_contact" required><br><br>
    Age: <input type="number" name="age" required><br><br>

    <button type="submit">Save</button>
</form>

<br>
<a href="receptionist_dashboard.php">⬅ Back</a>

</body>
</html>
