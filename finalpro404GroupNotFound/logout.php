<?php
session_start();
$sess_conn = new mysqli("localhost","root", "","krishna");
$quer_act = "update register set activestatus=0 where trim(user_key)='".$_SESSION['login_user_key']."'";
    $sql3 = mysqli_query($sess_conn,$quer_act);
    mysqli_close($sess_conn);
    unset($_SESSION['login_user_key']);
unset($_SESSION['firstname_phpexam']);
header('location:login.php');
?>

