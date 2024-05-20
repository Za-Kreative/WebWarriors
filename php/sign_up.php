<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);


    $checkUserQuery = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = $conn->query($checkUserQuery);

    if ($result->num_rows > 0) {

        $error = "Username or Email already exists.";
        header('Location: ../sign_up.php?error=' . urlencode($error));
    } else {

        $insertUserQuery = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        
        if ($conn->query($insertUserQuery) === TRUE) {
            header('Location: ../sign_in.php');
        } else {
            $error = "Error: " . $conn->error;
            header('Location: ../sign_up.php?error=' . urlencode($error));
        }
    }
}
?>
