<?php
session_start();
if(!isset($_SESSION['admin_user_key'])){
    header('location:login_admin.php');
}
$status='';
$error='';
?>
<html><head></head>
<title>Adminpage</title>
<link href="admincss.css" rel="stylesheet" type="text/css"/>
<body>
    <div class='profile' style='height: 30px;z-index: 9999;vertical-align: middle ;position: absolute;padding: 0.6em;right: 0.6em;font-size: 1em;color: whitesmoke'>
               
               <?php echo $_SESSION['firstname_phpexam2'] ?></span>   
                <span onclick="location.href='logout_admin.php'" style="padding: 0.5em;vertical-align: middle;border-radius:10px;cursor:pointer; border: 2px solid whitesmoke;">Logout</span>
            </div>
    <div>
    <form  class="form" method="post" action="#">
  <h2>Admin</h2>
  <input name="question" type="text" required autocomplete="off" type="email" placeholder="Enter Question"></input>
  <input name="option1" autocomplete="on" type="text" required placeholder="Option1"></input>
  <input name="option2" autocomplete="on" type="text" required placeholder="Option2"></input>
  <input name="option3" autocomplete="on" type="text" required placeholder="Option3"></input>
  <input name="option4" autocomplete="on" type="text" required placeholder="Option4"></input>
  <span>Answer:</span><select name="optans">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
  </select>
  <span>Subject:</span><select name="subject">
      <option>1</option>
      <option>2</option>
  </select>
  <button type="submit" name="submit">Add</button>
  <?php echo $status,$error; ?>
  <div>
  </div>
</form>
    </div>
    <?php
    if(isset($_POST['submit']))
    {
$conn = new mysqli("localhost","root", "","examdb");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$question= mysqli_real_escape_string($conn,htmlspecialchars($_POST["question"]));
$option1=mysqli_real_escape_string($conn,htmlspecialchars($_POST["option1"]));
$option2=mysqli_real_escape_string($conn,htmlspecialchars($_POST["option2"]));
$option3=mysqli_real_escape_string($conn,htmlspecialchars($_POST["option3"]));
$option4=mysqli_real_escape_string($conn,htmlspecialchars($_POST["option4"]));
$ans=mysqli_real_escape_string($conn,htmlspecialchars($_POST["optans"]));
$subject=mysqli_real_escape_string($conn,htmlspecialchars($_POST["subject"]));
$sql_check_user=$sql = "INSERT INTO questions (question, option1, option2,option3,option4,answer,subject) 
VALUES ('$question', '$option1', '$option2','$option3','$option4','$ans','$subject');";
$check_mail=$conn->query($sql_check_user);
if($check_mail)
{
    $conn->close();
    $status='Success';
    $error='';
}
else{
    $status='';
    $error='Error in insertion';
}
}
echo "<span style='color:green'>$status</span>";
echo "<span style='color:red'> $error</span>";
    ?>
    <div style="color: whitesmoke"><h3 >Active Users</h3>
    <?php
    $sess_conn=new mysqli("localhost","root", "","examdb");
    $query = "select email from register where activestatus=1";
$sql = mysqli_query($sess_conn,$query);
$rows = mysqli_num_rows($sql);
if ($rows >=1) {
    while($row = $sql->fetch_assoc()) {
            echo $row['email']."<br>";
        }
    $quer_act = "update register set activestatus=1 where trim(user_key)='".$_SESSION['login_user_key']."'";
    $sql3 = mysqli_query($sess_conn,$quer_act);
    mysqli_close($sess_conn);
} else {
$error = "Invalid Data";
}
?>
    </div>
</script>
</body>
</html>
