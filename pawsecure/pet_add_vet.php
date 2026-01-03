<?php
session_start(); // NEW: start session to get user_id
include 'db_connect.php';

if (isset($_POST['save'])) {
    $stmt = $conn->prepare(
        "INSERT INTO pets (pet_name, owner_name, owner_contact, diagnosis, treatment_fee, age)
        VALUES (?, ?, ?, ?, ?, ?)"
    );
    $stmt->execute([
        $_POST['pet_name'],
        $_POST['owner_name'],
        $_POST['owner_contact'],
        $_POST['diagnosis'],
        $_POST['treatment_fee'],
        $_POST['age']
    ]);

    $pet_id = $conn->lastInsertId(); // NEW: get the inserted pet's ID

    // --- Audit log ---
    $stmtLog = $conn->prepare(
        "INSERT INTO audit_log (user_id, action_type, details) VALUES (?, ?, ?)"
    );
    $stmtLog->execute([
        $_SESSION['user_id'],
        'Add Pet',
        "Added pet ID $pet_id: Name={$_POST['pet_name']}, Owner={$_POST['owner_name']}, Fee={$_POST['treatment_fee']}"
    ]);

    header("Location: pets_list_vet.php");

}
?>
<!DOCTYPE html>
<html>
<head>
        <title>Add Pet</title>
        <link rel="stylesheet" href="style.css">
</head>

<body>
<h2>Add Pet</h2>
<form method="POST">
    Pet Name: <input name="pet_name" required><br>
    Owner Name: <input name="owner_name" required><br>
    Owner Contact: <input name="owner_contact" required><br>
    Diagnosis: <input name="diagnosis"><br>
    Fee: <input type="number" step="0.01" name="treatment_fee" required><br>
    Age: <input type="number" name="age" required><br><br>
    <button name="save">Save</button>
</form>
</body>
</html>