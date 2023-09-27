<?php

function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student) {
        $totalGrade = 0;
        foreach ($student as $subject => $grade) {
            $totalGrade += $grade;
        }
        $averageGrade = $totalGrade / count($student);
        echo "Average grade for student: " . implode(", ", $student) . " is " . $averageGrade . "\n";
    }
}

// Create the $studentGrades array
$studentGrades = array(
    array("Math" => 85, "English" => 92, "Science" => 78),
    array("Math" => 90, "English" => 88, "Science" => 95),
    array("Math" => 75, "English" => 80, "Science" => 82)
);

// Call the function and pass the $studentGrades array as an argument
calculateAverageGrades($studentGrades);

?>