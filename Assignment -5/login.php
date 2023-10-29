<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div style="display: flex; flex-direction: column; justify-content: center;align-items: center;width: 100%;height: 100%;">
    <form action="login_backend.php" method="post">
        <div style="padding:20px 0px;">
            <label for="email">Enter email</label>
            <input type="email" name="email" id="email">
        </div>
        <div style="padding:20px 0px;">
            <label for="password">Enter password</label>
            <input type="password" name="password" id="username">
        </div>
        <input type="submit" value="Log in">
    </form>
    <a href="signup.php">Sign up here</a>
    </div>
</body>
</html>