<?php
// session_start();
// // error_reporting(E_ALL);
// // ini_set('display_errors', 1);
// // var_dump($_POST);
// if(!isset($_POST['loginbutton'])) 
// if(isset($_POST['loginbutton'])){
//     echo "button click vayo!";
//     $_SESSION['status'] = "login";
// } 
// if(isset($_POST['logoffbutton'])){
// echo "2 button click vayo";
// }
var_dump(isset($_SESSION['status']));
if(var_dump(isset($_POST['loginbutton']))){
    $_SESSION['status'] = "logoff";
}
if(var_dump(isset($_POST['logoffbutton']))){
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
    $_SESSION['status'] = "login";  #session being create naming login

    if(isset($_SESSION['status']) && $_SESSION['status'] == "login"){   #session check n created button
        echo "<form action='/' method='POST'>";
        echo "<button type='submit' name='loginbutton'>Login</button>";
        echo "</form>";
    }
    else if(isset($_SESSION['status']) && $_SESSION['status'] == "logoff"){
        echo "<form action='/' method='POST'>";
        echo "<h1>Hello buddy</h1>";
        echo "<button type='submit' name='logoffbutton'>Logoff</button>";
        echo "</form>";
    }
    else{
        echo "not set";
    }
    ?>
</body>
</html>