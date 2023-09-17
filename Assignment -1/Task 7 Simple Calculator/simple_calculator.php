<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Task 7: Simple Calculator</h1>
    <form method="POST" action="">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="operation">Operation:</label>
        <select name="operation" id="operation">
            <option value="addition">+</option>
            <option value="subtraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the values from the form
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        // Perform the calculation based on the selected operation
        switch ($operation) {
            case "addition":
                $result = $num1 + $num2;
                break;
            case "subtraction":
                $result = $num1 - $num2;
                break;
            case "multiplication":
                $result = $num1 * $num2;
                break;
            case "division":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero";
                }
                break;
            default:
                $result = "Invalid operation";
        }

        // Display the result
        echo "<br>Result: " . $result;
    }
    ?>
</body>
</html>