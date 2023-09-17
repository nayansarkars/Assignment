<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
  <form method="POST" action="">
    <label for="score1">Test Score 1:</label>
    <input type="number" name="score1" id="score1" required>
    
    <label for="score2">Test Score 2:</label>
    <input type="number" name="score2" id="score2" required>
    
    <label for="score3">Test Score 3:</label>
    <input type="number" name="score3" id="score3" required>
    
    <input type="submit" value="Calculate Average">
  </form>
</body>
</html>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $score1 = $_POST["score1"];
  $score2 = $_POST["score2"];
  $score3 = $_POST["score3"];
  
  $average = ($score1 + $score2 + $score3) / 3;
  
  if ($average >= 90) {
    $grade = "A";
  } elseif ($average >= 80) {
    $grade = "B";
  } elseif ($average >= 70) {
    $grade = "C";
  } elseif ($average >= 60) {
    $grade = "D";
  } else {
    $grade = "F";
  }
  
  echo "Average Score: " . $average . "<br>";
  echo "Grade: " . $grade;
}
?>