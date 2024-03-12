<?php
require 'connect.php';
$query = 'select * from categories';
$result = mysqli_query($conn,$query);
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
// var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses Tracker</title>
    <style>
        .Add{
            border: 2px solid black;
            max-width: 20rem;
        }
    </style>
</head>
<body>
    <div class='Add'>
        <form action="connect.php" method="post"> 
            <h1>Add new</h1>
            <input type="hidden" name="category-id">
            <label for="Entry type">Entry Type</label>
            <select name='' id=''>
            <?php
            foreach($data as $da){
                echo "<option name='cate'>{$da['label']}</option>";
            }
            
            ?>
            </select>
            <br>
            <label for="">Name:</label>
            <input type="text" name="" id="">
            <br>
            <label for="">Amount:</label>
            <input type="text" name="" id="">
            <br>
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>