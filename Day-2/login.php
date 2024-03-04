<?php
session_start();
$_SESSION['status'] = "true";
header('Location: /');