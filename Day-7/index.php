<?php
require 'connect.php';
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
            <label for="Entry type">Entry Type</label>
            <input type="select" name="" id="">
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