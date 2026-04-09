<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 50px;
        }
        input, select {
            padding: 10px;
            margin: 5px;
            font-size: 16px;
        }
        .result {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Simple PHP Calculator</h2>

<form method="post">
    <input type="number" name="num1" placeholder="Enter first number" required>
    
    <select name="operation">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
    </select>
    
    <input type="number" name="num2" placeholder="Enter second number" required>
    
    <br>
    <input type="submit" name="calculate" value="Calculate">
</form>

<div class="result">
<?php
if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['operation'];
    $result = "";

    switch ($op) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "sub":
            $result = $num1 - $num2;
            break;
        case "mul":
            $result = $num1 * $num2;
            break;
        case "div":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero!";
            }
            break;
    }

    echo "Result: " . $result;
}
?>
</div>

</body>
</html>