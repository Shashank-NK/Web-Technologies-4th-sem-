<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>System Info</title>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial; background: #f4f4f4; padding: 20px; }
        h1 { color: #333; }
        ul { background: #fff; padding: 15px; border-radius: 5px; }
        li { margin-bottom: 5px; }
        .clock { font-weight: bold; color: green; }
    </style>
</head>
<body>

<h1>PHP System Info</h1>

<ul>
    <li>PHP Version: <?php echo PHP_VERSION; ?></li>
    <li>Operating System: <?php echo PHP_OS; ?></li>
    <li>Max Integer: <?php echo PHP_INT_MAX; ?></li>
    <li>End of Line: <?php echo nl2br(PHP_EOL); ?></li>
</ul>

<h2>Current Time</h2>
<p class="clock"><?php echo date("H:i:s"); ?></p>

<h2>Server Info</h2>
<ul>
    <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
    <li>Current Script: <?php echo $_SERVER['SCRIPT_FILENAME']; ?></li>
</ul>

<h2>PHP Array</h2>
<ul>
<?php
$languages = ["PHP", "JavaScript", "Python"];

foreach ($languages as $item) {
    echo "<li>$item</li>";
}
?>
</ul>

<p><em>This page refreshes each request.</em></p>

</body>
</html>