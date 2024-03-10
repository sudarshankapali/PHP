<?php
require "connect.php";
$sql = "select * from Food_Table";
$result = mysqli_query($conn, $sql);
// $sql1 = "insert into Food_Table (Name) values ('Test_Data3')";
// mysqli_query($conn, $sql1);
// echo "<br>data inserted sucessfully";
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Momo</title>
</head>
<body>
    <main>
    <section>
      <form action="add.php" method="post">
        <input type="text" name="momo">
        <button type="submit">Add 🛒</button>
      </form>
    </section>
    <ul>
<?php
foreach ($rows as $value) {
    echo "<li>{$value['Name']}</li>";
}

?>
</ul>
    </main>
</body>
</html>