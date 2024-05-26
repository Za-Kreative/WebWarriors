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
    <div class="container">
        <div class="card">
            <div class="card_title mt-6">
                <h1>Create an Account</h1>
                <span>Already have an account? <a href="sign_in.php">Sign In</a></span>
            </div>
            <div class="form">
                <form action="php/sign_up.php" method="POST">
                    <input type="text" name="username" placeholder="Username" id="username" required />
                    <input type="email" name="email" placeholder="Email" id="email" required />
                    <input type="password" name="password" placeholder="Password" id="password" required />
                    <button type="submit">Sign Up</button>
                </form>
            </div>
            <div class="card_terms">
                <input type="checkbox" name="" id="terms"> <span>I have read and agree to the <a href="">Terms of Service</a></span>
            </div>
        </div>
    </div>
</body>
</html>
