  <?php
function convertToLetterGrade($grade) {
    if ($grade >= 90) {
        return 'A';
    } elseif ($grade >= 80) {
        return 'B';
    } elseif ($grade >= 70) {
        return 'C';
    } elseif ($grade >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numerical_grade = $_POST['numerical_grade'];
    $letter_grade = convertToLetterGrade($numerical_grade);
    echo "Numerical Grade: $numerical_grade<br>";
    echo "Letter Grade: $letter_grade";
}
?>
