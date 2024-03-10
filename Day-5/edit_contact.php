<?php
var_dump($_POST['id']);
require 'connect.php';
$f_name = $_POST['first-name'];
$m_name = $_POST['middle-name'];
$l_name = $_POST['last-name'];
$phone = $_POST['phone'];
var_dump($f_name);
$Adsql = "update contacts set first_name= 'done' where ID=4";
mysqli_query($conn, $Adsql);
echo "done";
//header('Location: /');
?>
