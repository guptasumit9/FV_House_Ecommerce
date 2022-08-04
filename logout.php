<?php
echo "sunchd";
session_start();

session_destroy();
header('location:user/login.php');
if (!isset($_SESSION['username'])) {
  header('location:user/login.php');
  echo "you are logout";
  }
 ?>