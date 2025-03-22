<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $grades = $_POST['grades'];
    $credits = $_POST['credits'];

    $gradePoints = [
        "A+" => 4.0, "A" => 4.0, "A-" => 3.7,
        "B+" => 3.3, "B" => 3.0, "B-" => 2.7,
        "C+" => 2.3, "C" => 2.0, "C-" => 1.7,
        "D+" => 1.3, "D" => 1.0, "F" => 0.0
    ];

    $totalPoints = 0;
    $totalCredits = 0;

    for ($i = 0; $i < count($grades); $i++) {
        $grade = strtoupper(trim($grades[$i]));
        $credit = floatval($credits[$i]);

        if (isset($gradePoints[$grade])) {
            $totalPoints += $gradePoints[$grade] * $credit;
            $totalCredits += $credit;
        }
    }

    if ($totalCredits > 0) {
        $cgpa = $totalPoints / $totalCredits;
        echo "<h3>Your CGPA: " . number_format($cgpa, 2) . "</h3>";
    } else {
        echo "<h3>Invalid input. Please enter valid grades and credits.</h3>";
    }
} else {
    echo "<h3>Error: Invalid request.</h3>";
}
?>