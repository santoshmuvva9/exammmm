<?php
include 'sessioninfo.php';
if($passed==false)
{
    header("location:login.php");
}
$conn = new mysqli("localhost","root", "","krishna");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$first= mysqli_real_escape_string($conn,htmlspecialchars($_POST["firname"]));
$second=mysqli_real_escape_string($conn,htmlspecialchars($_POST["lasname"]));
$mail=mysqli_real_escape_string($conn,htmlspecialchars($_POST["mailer"]));
$pass=mysqli_real_escape_string($conn,htmlspecialchars($_POST["passer"]));
$phone=mysqli_real_escape_string($conn,htmlspecialchars($_POST["phone"]));
$addr=mysqli_real_escape_string($conn,htmlspecialchars($_POST["address"]));
$sql_check_user="select * from register where email='".$mail."' and user_key!='".$_SESSION['login_user_key']."'";
$check_mail=$conn->query($sql_check_user);
if(mysqli_num_rows($check_mail)>=1)
{
    $conn->close();
    header("Location: profile.php?text='Mail already exists with another user.'");
    exit();
}
$sql = "update register set firstname='".$first."',lastname='".$second."',email='".$mail."',password='".$pass."',
    phone='".$phone."',address='".$addr."' where user_key='".$_SESSION['login_user_key']."'";
if ($conn->query($sql) === TRUE) {
    $conn->close();
header("Location: profile.php?text='Successful'");
exit();
}
?>
