<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'foods';

$conn = mysqli_connect($hostname, $username, $password, $database_name);
// echo '<pre>';
// var_dump($conn);
// echo '</pre>';

echo " connection success ✅";
// fetch the data from the backend 
// $sql = "select * from Food_Table";
// $result = mysqli_query($conn, $sql);
// echo "<pre>";
// var_dump($result);
// echo "</pre>";

$sql = "select * from Food_Table";
$sql1 = "insert into Food_Table (Name) values ('Test_Data3')";
mysqli_query($conn, $sql1);
echo "<br>data inserted sucessfully";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<ul>
<?php
foreach ($rows as $value) {
    echo "<li>{$value['ID']} {$value['Name']} {$value['created_at']}</li>";
}

?>
</ul>