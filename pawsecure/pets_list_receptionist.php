<?php
include 'db_connect.php';
$pets = $conn->query("SELECT * FROM pets")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
        <title>Pet Records</title>
        <link rel="stylesheet" href="style.css">
</head>

<body>
<h2> Pet Records</h2>
<a href="pet_add_receptionist.php">✚ Add Pet</a>
<br><br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Pet's Name</th>
        <th>Owner</th>
        <th>Contact</th>
        <th>Diagnosis</th>
        <th>Treatment Fee</th>
        <th>Age</th>
</tr>

<?php foreach ($pets as $p): ?>
    <tr>
        <td><?= $p['id'] ?></td>
        <td><?= $p['pet_name'] ?></td>
        <td><?= $p['owner_name'] ?></td>
        <td><?= $p['owner_contact'] ?></td>
        <td><?= $p['diagnosis'] ?></td>
        <td><?= $p['treatment_fee'] ?></td>
        <td><?= $p['age'] ?></td>
        <td>
            <a href="pet_edit_receptionist.php?id=<?= $p['id'] ?>"> Edit</a> |
            <a href="pet_delete_receptionist.php?id=<?= $p['id'] ?>">Delete</a>
</td>
</tr>
<?php endforeach; ?>
</table>

<br>
<a href="receptionist_dashboard.php">⬅ Back</a>
</body>
</html>