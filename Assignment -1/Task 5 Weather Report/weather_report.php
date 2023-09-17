<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather Report</title>
</head>
<body>
  <h1>Task 5: Weather Report</h1>
  <form method="POST" action="">
    <label for="temperature">Enter the temperature:</label>
    <input type="number" name="temperature" id="temperature" required>
    
    <input type="submit" value="Check">
  </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $temperature = $_POST["temperature"];
  
  if ($temperature < 0) {
    echo "It's freezing!";
  } elseif ($temperature >= 0 && $temperature < 20) {
    echo "It's cool.";
  } else {
    echo "It's warm.";
  }
}
?>