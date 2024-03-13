<?php
require 'connect.php';
$query = 'select * from categories';
$result = mysqli_query($conn,$query);
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);

// expenses data
$query1 = 'SELECT expenses.*, categories.label AS category_label FROM expenses INNER JOIN categories ON expenses.category_id = categories.id';
$result1 = mysqli_query($conn,$query1);
$data1 = mysqli_fetch_all($result1,MYSQLI_ASSOC);
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
        .display{
            border: 2px solid black;
            max-width: 30rem;
        }
        table, th, td {
border: 1px solid black;
}
body{
    display: flex;
}
    </style>
</head>
<body>
    <div class="display">
    <table>
  <tr>
    <th colspan="5">Name</th>
  </tr>
  <tr>
    <th>S.N</th>
    <th>Name</th>
    <th>Amount</th>
    <th>Type</th>
    <th>Delete</th>
  </tr>
  <?php
  foreach($data1 as $value1){
    echo "<tr>
    <td>{$value1['id']}</td>
    <td>{$value1['title']}</td>
    <td>{$value1['amount']}</td>
    <td>{$value1['category_label']}</td>
    <td><form action='delete.php' method='post'>
    <input type='hidden' name='delete-id'value='{$value1['id']}'>
    <button type='submit'>Delete</button>
    </form></td>
  </tr>";
  }
  
  ?>
</table>
    </div>
    <div class='Add'>
        <form action="add.php" method="post"> 
            <h1>Add new</h1>
            <label for="Entry type">Entry Type</label>
            <select name='category-name' id=''>
            <?php
            foreach($data as $da){
                echo "<option name='{$da['label']}'>{$da['label']}</option>";
            }
            ?>
            </select>
            <br>
            <label for="">Name:</label>
            <input type="text" name="exp-name" id="">
            <br>
            <label for="">Amount:</label>
            <input type="text" name="amount" id="">
            <br>
            <input type="date" name="date">
            <br>
            <input type="time" name="time">
            <br>
            <button type="submit">Add Expenses</button>
        </form>
    </div>
</body>
</html>