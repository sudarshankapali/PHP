<?php
session_start();
$isLogin = false;
if (isset($_SESSION['isLogin'])) {
  $sessionKoValue = $_SESSION['isLogin'];
  $isLogin = $sessionKoValue;
} else {
  $isLogin = false;
}
?>