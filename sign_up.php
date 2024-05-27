<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="navbar">
        <h1>WebWarriors</h1>
        <div class="navbar-buttons">
            <a href="index.php">Home</a>
            <a href="sign_in.php">Sign In</a>
        </div>
    </div>
    <div class="center-container">
        <div class="card">
            <div class="card_title">
                <h1>Create Account</h1>
                <span>Already have an account? <a href="sign_in.php">Sign In</a></span>
            </div>
            <form action="php/sign_up.php" method="POST" class="form">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>
