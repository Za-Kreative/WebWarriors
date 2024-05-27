<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task_id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $sql = "UPDATE tasks SET name='$name', description='$description' WHERE id='$task_id'";
    $conn->query($sql);
    header('Location: ../index.php');
}
?>
