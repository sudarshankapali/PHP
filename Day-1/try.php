<?php
session_start();
if(isset($_SESSION)){
    if($_SESSION == "islogin"){
        header("Location: /");
    }
    else{
        header("Location: /");
    }
    
}
?>