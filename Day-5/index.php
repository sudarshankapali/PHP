<?php
require './connect.php';
$sqlQuery = 'select * from contacts';
$phone_data = mysqli_query($conn,$sqlQuery);
$result = mysqli_fetch_all($phone_data,MYSQLI_ASSOC);
var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to phone management system</h1>
    <form action="" method="post">
        <input type='text' name='first-name' placeholder='first name'>
        <input type='text' name='middle-name' placeholder='middle name'>>
        <input type='text' name='last-name' placeholder='last name'>>
        <input type='text' name='phone' placeholder='phone'>>

        <br>
        <button type="submit">Add</button>
    </form>
    <div>
        <ul>
            <?php
            foreach ($result as $d) {
                echo "<li>{$d['first_name']}</li>";
            }
            
            ?>
            
        </ul>
    </div>
</body>
</html>