<?php
session_start();
$sess_conn = new mysqli("localhost","root", "","krishna");
$passed=false;
if(isset($_SESSION['login_user_key'])){
    $sql_userkey="select * from register where user_key='".$_SESSION['login_user_key']."'";
    $check_session=$sess_conn->query($sql_userkey);
    if(mysqli_num_rows($check_session)>=1)
    {
        $sess_conn->close();
        $passed=true;
    }
    else
    {
    $sess_conn->close();
    header('location:login.php');
    }
}
?>

