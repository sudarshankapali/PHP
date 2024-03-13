<?php
require 'connect.php';
$delete = $_POST['delete-id'];
$deleteQuery = "delete from expenses where id = $delete";
$run = mysqli_query($conn,$deleteQuery);

?>
