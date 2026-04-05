<?php
$username = $_POST['username'];

setcookie("user", $username, time() + (86400 * 7)); // 7 days

echo "Cookie Saved! <br><a href='get_cookie.php'>Go to Page</a>";
?>