<?php
session_start();
echo "<pre>";
var_dump($_SESSION);
var_dump($_POST);
echo "</pre>";
if(isset($_SESSION['status'])){
    if($_SESSION['status'] == "logoff"){
        header("Location: /login.php");
    }
}
else{
    $_SESSION['status'] = "login";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    if(isset($_SESSION['status'])){
        if($_SESSION == 'login'){
            echo "<form action='login.php' method='post'>
            <button type='submit'>logout</button>
        </form>";
        }
        else{
            echo "<form action='login.php' method='post'>
           
            <h1>hello buddy</h1>
            <button type='submit'>login</button>
        </form>";
        }
    }
    
    ?>
    
</body>
</html>