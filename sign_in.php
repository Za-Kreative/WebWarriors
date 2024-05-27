<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="navbar">
        <h1>WebWarriors</h1>
        <div class="navbar-buttons">
            <a href="index.php">Home</a>
            <a href="sign_up.php">Sign Up</a>
        </div>
    </div>
    <div class="center-container">
        <div class="card">
            <div class="card_title">
                <h1>Welcome Back!</h1>
                <span>Don't have an account? <a href="sign_up.php">Sign Up</a></span>
            </div>
            <form action="php/sign_in.php" method="POST" class="form">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Sign In</button>
            </form>
        </div>
    </div>
</body>
</html>
