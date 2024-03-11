<?php
function preFunciton($parameter){
    echo "<pre>";
    var_dump($parameter);
    echo "</pre>";
}
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'phone_book';
$conn = mysqli_connect($hostname,$username,$password,$databaseName);
$query = 'select * from contacts';
$sql = mysqli_query($conn,$query);

preFunciton(mysqli_fetch_all($sql,MYSQLI_ASSOC));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting database</title>
</head>
<body>
    
</body>
</html>