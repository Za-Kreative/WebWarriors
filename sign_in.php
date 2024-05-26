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
    <div class="container">
        <div class="card">
            <div class="card_title mt-6">
                <h1>Welcome Back!</h1>
                <span>Don't have an account? <a href="sign_up.php">Sign Up</a></span>
            </div>
            <div class="form">
                <form action="php/sign_in.php" method="POST">
                    <input type="email" name="email" placeholder="Email" id="email" required />
                    <input type="password" name="password" placeholder="Password" id="password" required />
                    <button type="submit">Sign In</button>
                </form>
            </div>
            <div class="card_terms">
                <input type="checkbox" name="" id="terms"> <span>I have read and agree to the <a href="">Terms of Service</a></span>
            </div>
        </div>
    </div>
</body>
</html>
