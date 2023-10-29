<?php
include "utils.php";

// Initialize variables
$username = $email = $password = "";
$errors = array();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if (empty($_POST["username"])) {
        $errors["username"] = "Username is required";
    } else {
        $username = sanitizeInput($_POST["username"]);
        // Check if the username contains only letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $username)) {
            $errors["username"] = "Only letters and white space allowed";
        }
    }

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

    // If there are no errors, save the user details
    if (count($errors) == 0) {
        // Save the user details to the database or any other storage method
        // You can also perform additional operations like hashing the password before saving
        appendDataFile("{$username},{$email},{$password},user");

        // Redirect to a success page or perform any other desired action
        header("Location: login.php");
        exit();
    } else {
        ;
    }
}

?>