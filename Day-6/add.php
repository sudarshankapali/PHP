<?php
require 'connect.php';
if(isset($_POST['url'])){
    $shorturl = uniqid('r-');
    $longUrl = $_POST['url'];
    // echo "$shorturl";
    $insert = "insert into url(long_url,short_url ) values ('$longUrl','$shorturl')";
    $run = mysqli_query($conn,$insert);
    header('Location: /');
}
?>