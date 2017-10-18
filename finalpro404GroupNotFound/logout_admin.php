<?php
session_start();
unset($_SESSION['admin_user_key']);
unset($_SESSION['firstname_phpexam2']);
header('location:login_admin.php');
?>
