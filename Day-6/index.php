<?php
require 'connect.php';
$sql = "select * from url";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th,td{
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <form action='add.php' method='post'>
        <input type='text' name='url'>
        <br>
        <button type='submit'>Generate</button>
    </form>
    <section>
        <h1>perious generated links</h1>
        <table>
            <thead>
                <tr>
                    <thead>Long URL</thead>
                    <thead>Short URL</thead>
                </tr>
                <tbody>
        <?php foreach ($rows as $key => $value) : ?>
        <tr>
            <!-- Just to display the links, feel free to make your own style changes -->
            <td><a href="/q/?r=<?= $value['short_url'] ?>">
                <?= $_SERVER['HTTP_HOST'] ?>/q/?r=<?= $value['short_url'] ?></a>

            </td>
            <td> <span> <?= $value['long_url'] ?></span></td>
        </tr>
        <?php endforeach ?>
        </tbody>
            </thead>
        </table>
    </section>
</body>
</html>