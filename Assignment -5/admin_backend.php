<?php
include "utils.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = sanitizeInput($_POST["email"]);
    $role = sanitizeInput($_POST["role"]);
    if(empty($email) || empty($role)) {
        echo '<h1 style="color: red;">You must select user and entered role</h1>';
        exit();
    }
    $foundUser = findUserByEmail($email);
    $foundIndex = findIndexByEmail($email);
    $users = getRegisteredUsersData();
    $foundUser["role"]= $role;
    $users[$foundIndex]= $foundUser;
    $usersAsWritable = getRegisteredUsersDataToFileWriteable($users);
    overwriteDataFile($usersAsWritable);
    header("Location: login.php");
}
?>