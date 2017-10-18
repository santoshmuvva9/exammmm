<?php
session_start();
$sess_conn = new mysqli("localhost","root", "","krishna");
if(isset($_SESSION['admin_user_key'])){
$sql_userkey="select * from admin where user='".$_SESSION['admin_user_key']."'";
    $check_session=$sess_conn->query($sql_userkey);
    if(mysqli_num_rows($check_session)>=1)
    {
        $sess_conn->close();
        header('location:enterquestions.php');
    }
    else
    {
        $sess_conn->close();
        header('location:login_admin.php');
    }
}
else{
$error=''; // Variable To Store Error Message  
if(isset($_POST['username'])&&isset($_POST['password']))
{
    $username= mysqli_real_escape_string($sess_conn,htmlspecialchars($_POST["username"]));
$password=mysqli_real_escape_string($sess_conn,htmlspecialchars($_POST["password"]));
$query = "select * from Admin where trim(pass)='$password' AND trim(user)='$username'";
$sql = mysqli_query($sess_conn,$query);
$rows = mysqli_num_rows($sql);
if ($rows >=1) {
    while($row = $sql->fetch_assoc()) {
            $_SESSION['admin_user_key']=$row['user'];
            $_SESSION['firstname_phpexam2']=$row['user'];
        }
header("location: enterquestions.php"); 
} else {
$error = "Invalid Data";
}
mysqli_close($sess_conn);
}
}
?>
<html><head></head>
<title>Register for exam..</title>
<link href="registercss.css" rel="stylesheet" type="text/css"/>
<body>
    <div>
    <form style="height: 22em" class="form" method="post" action="#">
  <h2>Login</h2>
  <?php
echo "<spam style='color: red;float:left;'>".$error."</spam>";
?>
  <p type="Email:"><input name="username" type="text" required autocomplete="off" type="email" placeholder="Enter email"></input></p>
  <p type="Password:"><input name="password" autocomplete="on" type="password" required placeholder="Enter Password"></input></p>
  <button type="button" id="regi">Register</button>
  <button type="submit">Login</button>
  
  <div>
  </div>

</form>
    </div>
    <script type="text/javascript">
    document.getElementById("regi").onclick = function () {
        location.href = "register.php";
    };
</script>
</body>
</html>
