<?php
session_start();
if(isset($_SESSION['shopping'])){
    array_push($_SESSION['shopping'],$_POST['list']);
}
else{
    $_SESSION['shopping'] = [$_POST['list']];
}
header('Location: /');