<?php
require 'connect.php';
$name = $_POST['category-name'];
$amount = $_POST['amount'];
$date = $_POST['date'];
$IDQuery = "select id from categories where label = '{$name}'";
$run1 = mysqli_query($conn,$IDQuery);
$res = mysqli_fetch_row($run1);

$id = $res[0];
$insertQuery = "insert into expenses(title,amount,description,expenses_date,category_id) values ('$name','$amount','byuing test','$date',$id)";
$run = mysqli_query($conn,$insertQuery);
header('Location: /');
?>