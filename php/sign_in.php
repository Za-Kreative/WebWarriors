<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkUserQuery = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkUserQuery);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            header('Location: ../index.php');
        } else {
            $error = "Incorrect password.";
            header('Location: ../sign_in.php?error=' . urlencode($error));
        }
    } else {
        $error = "No account found with that email.";
        header('Location: ../sign_in.php?error=' . urlencode($error));
    }
}
?>
