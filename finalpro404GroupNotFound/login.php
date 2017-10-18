<?php
session_start();
$sess_conn = new mysqli("localhost","root", "","krishna");
if(isset($_SESSION['login_user_key'])){
$sql_userkey="select * from register where user_key='".$_SESSION['login_user_key']."'";
    $check_session=$sess_conn->query($sql_userkey);
    if(mysqli_num_rows($check_session)>=1)
    {
        $sess_conn->close();
        header('location:profile.php');
    }
    else
    {
        $sess_conn->close();
        header('location:login.php');
    }
}
else{
$error=''; // Variable To Store Error Message  
if(isset($_POST['username'])&&isset($_POST['password']))
{
$username= mysqli_real_escape_string($sess_conn,htmlspecialchars($_POST["username"]));
$password=mysqli_real_escape_string($sess_conn,htmlspecialchars($_POST["password"]));
$query = "select * from register where trim(password)='$password' AND trim(email)='$username'";
$sql = mysqli_query($sess_conn,$query);
$rows = mysqli_num_rows($sql);
if ($rows >=1) {
    while($row = $sql->fetch_assoc()) {
            $_SESSION['login_user_key']=$row['user_key'];
            $_SESSION['firstname_phpexam']=$row['firstname'];
        }
    $quer_act = "update register set activestatus=1 where trim(user_key)='".$_SESSION['login_user_key']."'";
    $sql3 = mysqli_query($sess_conn,$quer_act);
    mysqli_close($sess_conn);
header("location: profile.php");
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
