<?php
include 'db_connect.php';
$stmt = $conn->prepare("DELETE FROM pets WHERE id=?");
$stmt->execute([$_GET['id']]);
header("Location: pets_list_vet.php");