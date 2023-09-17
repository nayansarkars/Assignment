<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Even or Odd Checker</title>
</head>
<body>
    <h1>Task 4: Even or Odd Checker</h1>
  <form method="POST" action="">
    <label for="number">Enter a number:</label>
    <input type="number" name="number" id="number" required>
    
    <input type="submit" value="Check">
  </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $number = $_POST["number"];
  
  if ($number % 2 == 0) {
    echo $number . " is even.";
  } else {
    echo $number . " is odd.";
  }
}
?>