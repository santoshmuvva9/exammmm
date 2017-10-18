<?php
include 'sessioninfo.php';
if($passed==true)
{
    header("location:profile.php");
    exit();
}
function generateRandomString($length = 15) {
    $conn = new mysqli("localhost","root", "","krishna");
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    $sql_userkey="select * from register where user_key='".$randomString."'";
    $check_key=$conn->query($sql_userkey);
    if(mysqli_num_rows($check_key)>=1)
    {
    generateRandomString();
    }
    else
    {
    $conn->close();
    return $randomString;
    }
}

$conn = new mysqli("localhost","root", "","krishna");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$user_generated_key=generateRandomString();
$first= mysqli_real_escape_string($conn,htmlspecialchars($_POST["firname"]));
$second=mysqli_real_escape_string($conn,htmlspecialchars($_POST["lasname"]));
$mail=mysqli_real_escape_string($conn,htmlspecialchars($_POST["mailer"]));
$pass=mysqli_real_escape_string($conn,htmlspecialchars($_POST["passer"]));
$phone=mysqli_real_escape_string($conn,htmlspecialchars($_POST["phone"]));
$addr=mysqli_real_escape_string($conn,htmlspecialchars($_POST["address"]));
$sql = "INSERT INTO register (user_key,firstname, lastname, email,password,phone,address) 
VALUES ('".$user_generated_key."','".$first."','".$second."','".$mail."','".$pass."','".$phone."','".$addr."')";
$sql_check_user="select * from register where email='".$mail."'";
$check_mail=$conn->query($sql_check_user);
if(mysqli_num_rows($check_mail)>=1)
{
    $conn->close();
    header("Location: register.php?text='Mail already exists try with another.'");
}
else if ($conn->query($sql) === TRUE) {
    $conn->close();
header("Location: login.php?text='Successful'");
exit();
} else {
    $conn->close();
    header("Location: register.php?text='Error in registration contact sysadmin.'");
}
?>
