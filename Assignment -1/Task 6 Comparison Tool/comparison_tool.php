<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Task 6: Comparison Tool</h1>
    <form method="POST" action="">
      <label for="number1">Enter the first number:</label>
      <input type="number" name="number1" id="number1" required>
      
      <label for="number2">Enter the second number:</label>
      <input type="number" name="number2" id="number2" required>
      
      <input type="submit" value="Compare">
    </form>
    
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $number1 = $_POST["number1"];
  $number2 = $_POST["number2"];
  
  $largerNumber = $number1 > $number2 ? $number1 : $number2;
  
  echo "The larger number is: " . $largerNumber;
}
?>