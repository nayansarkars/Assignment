<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temperature Converter</title>
</head>
<body>
    <h1>Task 2: Temperature Converter</h1>
  <form method="POST" action="">
    <label for="temperature">Temperature:</label>
    <input type="number" name="temperature" id="temperature" required>
    
    <label for="conversion_type">Conversion Type:</label>
    <select name="conversion_type" id="conversion_type" required>
      <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
      <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
    </select>
    
    <input type="submit" value="Convert">
  </form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $temperature = $_POST["temperature"];
  $conversion_type = $_POST["conversion_type"];
  
  if ($conversion_type == "celsius_to_fahrenheit") {
    $converted_temperature = ($temperature * 9/5) + 32;
    echo "Converted Temperature: " . $converted_temperature . "°F";
  } elseif ($conversion_type == "fahrenheit_to_celsius") {
    $converted_temperature = ($temperature - 32) * 5/9;
    echo "Converted Temperature: " . $converted_temperature . "°C";
  }
}
?>