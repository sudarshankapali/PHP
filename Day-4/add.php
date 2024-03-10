<?php
require "connect.php";

$data = $_POST['momo'];

$sql = "insert into Food_Table (name) values ('$data')";
mysqli_query($conn, $sql);

header('Location: /');
?>