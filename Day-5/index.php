<?php
require './connect.php';
$sqlQuery = 'select '
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to phone management system</h1>
    <form action="" method="post">
        <input type='text' name='contact'>
        <br>
        <form action="" method="post">
        <button type="submit">Add</button>
        </form>
        <form action="" method="post">
        <button type="submit">Edit</button>
        </form>
        <form action="" method="post">
        <button type="submit">Delete</button>
        </form>
    </form>
    <div>
        <ul>
            <li></li>
        </ul>
    </div>
</body>
</html>