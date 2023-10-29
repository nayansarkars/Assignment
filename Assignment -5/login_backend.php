<?php
include "utils.php";

// Initialize variables
$email = $password = "";
$errors = array();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate email
    if (empty($_POST["email"])) {
        $errors["email"] = "Email is required";
    } else {
        $email = sanitizeInput($_POST["email"]);
        // Check if the email address is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Invalid email format";
        }
    }

    // Validate password
    if (empty($_POST["password"])) {
        $errors["password"] = "Password is required";
    } else {
        $password = sanitizeInput($_POST["password"]);
        // Additional password validation can be implemented here
    }

    $foundUser = findUserByEmail($email);
    if((is_null($foundUser)) || ($foundUser["password"]!=$password)){
        $errors["login"]="Invalid credentials";
    }
    // If there are no errors, save the user details
    if (count($errors) == 0) {
        // Save the user details to the database or any other storage method
        // You can also perform additional operations like hashing the password before saving
        
        // Redirect to a success page or perform any other desired action
        session_start();
        $_SESSION['user_details'] = $foundUser;
        if($foundUser["role"]=="admin"){
            header("Location: admin_home.php");
        } else if($foundUser["role"]=="manager") {
            header("Location: manager_home.php");
        } else {
            header("Location: user_home.php");
        }
        exit();
    } else {
        foreach ($errors as $error) {
            echo "<h1 style='color:red'>{$error}</h1>";
        }
    }
}

?>