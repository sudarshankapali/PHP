<?php 
session_start();
$list = $_SESSION['shopping'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
</head>
<body>
    <form action="addToCart.php" method="post">
        <input type="text" name="list">
        <button type="submit">add</button>
    </form>
    <div>
        <ul>
            <?php
            foreach ($list as $x) {
                echo "<li>$x</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>