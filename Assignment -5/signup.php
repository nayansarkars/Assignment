<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <h1>Sign up here</h1>
    <div style="display: flex; flex-direction: column; justify-content: center;align-items: center;width: 100%;height: 100%;">
        <form action="signup_backend.php" method="post">
        <div style="padding:20px 0px;">
            <label for="username">Enter username</label>
            <input type="text" name="username" id="username">
        </div>
        <div style="padding:20px 0px;">
            <label for="email">Enter email</label>
            <input type="email" name="email" id="email">
        </div>
        <div style="padding:20px 0px;">
            <label for="password">Enter Password</label>
            <input type="password" name="password" id="password">
        </div>
            <input type="submit" value="Sign up">
        </form>
        <a href="login.php">Log in here</a>
    </div>
</body>
</html>