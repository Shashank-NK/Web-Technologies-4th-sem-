<?php
$conn = new mysqli("localhost", "root", "", "user_db");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login Successful!";
} else {
    echo "Invalid Username or Password!";
}

$conn->close();
?>