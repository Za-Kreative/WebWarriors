<?php
session_start();
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $sql = "UPDATE tasks SET removed=0 WHERE id=$id AND user_id=$user_id";
    $conn->query($sql);
    header('Location: ../removed_tasks.php');
}
?>
