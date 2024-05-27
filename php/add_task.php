<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $sql = "INSERT INTO tasks (user_id, name, description, status, removed, created_at) VALUES ('$user_id', '$name', '$description', 'pending', 0, NOW())";
    $conn->query($sql);
    header('Location: ../index.php');
}
?>
