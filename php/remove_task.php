<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../sign_in.php');
    exit();
}

include 'db.php';

$user_id = $_SESSION['user_id'];
$task_id = $_GET['id'];

// Update the task to mark it as removed
$sql = "UPDATE tasks SET removed=1 WHERE id=$task_id AND user_id=$user_id";
if ($conn->query($sql) === TRUE) {
    // Redirect back to the index page after removal
    header('Location: ../index.php');
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
