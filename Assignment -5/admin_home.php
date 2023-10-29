<?php
    include "utils.php";
    session_start();
    if(!isset($_SESSION['user_details']) || ($_SESSION['user_details']['role']!="admin")){
        header("Location: login.php");
    }
    $foundUser = $_SESSION['user_details'];
    $users = getRegisteredUsersData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home page</title>
    <style>
        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            width: 100%;
            height: 100%;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>This is admin home page</h1>
        <h1>Set an user role</h1>
        <form action="admin_backend.php" method="post">
            <div style="padding: 20px 0px;">
                <label for="email">User</label>
                <select name="email" id="email">
                    <?php
                        foreach ($users as $user) {
                            echo "<option value='{$user["email"]}'>{$user["username"]}</option>";
                        }
                    ?>
                </select>
            </div>
            <div style="padding: 20px 0px;">
                <label for="role">Set role</label>
                <input type="text" name="role" id="role">
            </div>
            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>