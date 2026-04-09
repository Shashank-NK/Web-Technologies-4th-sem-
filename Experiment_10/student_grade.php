<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Calculator</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 40px;
        }
        input {
            padding: 8px;
            margin: 5px;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Student Grade Calculator</h2>

<form method="post">
    <input type="number" name="sub1" placeholder="Subject 1" required><br>
    <input type="number" name="sub2" placeholder="Subject 2" required><br>
    <input type="number" name="sub3" placeholder="Subject 3" required><br>
    <input type="submit" name="calculate" value="Calculate">
</form>

<div class="result">
<?php
if (isset($_POST['calculate'])) {
    $s1 = $_POST['sub1'];
    $s2 = $_POST['sub2'];
    $s3 = $_POST['sub3'];

    $total = $s1 + $s2 + $s3;
    $average = $total / 3;

    if ($average >= 90) {
        $grade = "A";
    } elseif ($average >= 70) {
        $grade = "B";
    } elseif ($average >= 50) {
        $grade = "C";
    } else {
        $grade = "Fail";
    }

    echo "Total: $total <br>";
    echo "Average: $average <br>";
    echo "Grade: $grade";
}
?>
</div>

</body>
</html>