<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Collect input
    $pet_name      = trim($_POST['pet_name'] ?? '');
    $owner         = trim($_POST['owner_name'] ?? '');
    $contact       = trim($_POST['owner_contact'] ?? '');
    $diagnosis     = trim($_POST['diagnosis'] ?? '');      
    $treatment_fee = trim($_POST['treatment_fee'] ?? '');   
    $age           = trim($_POST['age'] ?? '');

    // Server-side input validation
    if (empty($pet_name) || empty($owner) || empty($contact) || empty($age)) {
        die("Invalid input detected. Name, Owner, Contact, and Age are required.");
    }

    // Insert using prepared statement
    $stmt = $conn->prepare("
        INSERT INTO pets (pet_name, owner_name, owner_contact, diagnosis, treatment_fee, age)
        VALUES (?, ?, ?, ?, ?, ?)
    ");

    $stmt->execute([
        $pet_name,
        $owner,
        $contact,
        $diagnosis,
        $treatment_fee,
        $age
    ]);

    $_SESSION['success'] = "Pet record added successfully.";

    // Redirect to receptionist list
    header("Location: pets_list_receptionist.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Pet (Vet)</title>
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
</body>
</html>
