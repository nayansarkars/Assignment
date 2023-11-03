<?php
// Initialize variables
$username = $email = $password = "";
$errors = array();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if (empty($_POST["username"])) {
        $errors["username"] = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
        // Check if the username contains only letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $username)) {
            $errors["username"] = "Only letters and white space allowed";
        }
    }

    // Validate email
    if (empty($_POST["email"])) {
        $errors["email"] = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if the email address is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Invalid email format";
        }
    }

    // Validate password
    if (empty($_POST["password"])) {
        $errors["password"] = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        // Additional password validation can be implemented here
    }

    // If there are no errors, save the user details
    if (count($errors) == 0) {
        // Save the user details to the database or any other storage method
        // You can also perform additional operations like hashing the password before saving

        // Redirect to a success page or perform any other desired action
        header("Location: success.php");
        exit();
    }
}

// Function to sanitize and validate input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!-- Registration form HTML -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" value="<?php echo $username; ?>">
    <span class="error"><?php echo $errors["username"]; ?></span>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $errors["email"]; ?></span>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <span class="error"><?php echo $errors["password"]; ?></span>

    <input type="submit" value="Register">
</form>