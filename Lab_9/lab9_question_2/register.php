<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"] ?? "");
    $roll = trim($_POST["roll"] ?? "");
    $course = trim($_POST["course"] ?? "");
    $semester = trim($_POST["semester"] ?? "");

    // Check empty fields
    if ($name == "" || $roll == "" || $course == "" || $semester == "") {

        echo "Error: All fields are required.";

    }
    
    // Check name
    elseif (!preg_match("/^[a-zA-Z ]+$/", $name)) {

        echo "Error: Name should contain only letters.";

    }
    
    // Check roll number
    elseif (!preg_match("/^[0-9]+$/", $roll)) {

        echo "Error: Roll number should contain only numbers.";

    }
    
    // Check semester
    elseif (!is_numeric($semester)) {

        echo "Error: Semester must be a number.";

    }
    
    elseif ((int)$semester < 1 || (int)$semester > 8) {

        echo "Error: Semester must be between 1 and 8.";

    }
    
    else {

        echo "Student registered successfully!";

    }
}

?>