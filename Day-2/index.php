<?php
session_start();
$status = isset($_SESSION['status']) ? $_SESSION['status'] : false;
var_dump($status);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($status == "false"){
        echo "<form action='login.php' method='post'>
        <button type='submit'>Login</button>
    </form>";
    }else{
        echo "<form action='logout.php' method='post'>
        <button type='submit'>Logout</button>
    </form>";
    }
    ?>
</body>
</html>