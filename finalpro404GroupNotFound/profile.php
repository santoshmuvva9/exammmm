<?php
include 'sessioninfo.php';
if($passed==false)
{
    header("location:login.php");
}
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="registercss.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <div class='profile' style='height: 100px;z-index: 9999;vertical-align: middle ;position: absolute;padding: 0.6em;right: 0.6em;font-size: 1.5em;color: whitesmoke'>
               
                <img alt='profile' onclick="location.href='profile.php'" style='cursor:pointer;width: 40px;height: 40px;padding: 0.3em' src='profile.png'><span style="padding: 0.5em;vertical-align: middle;border-radius:10px;  border-left: 2px solid whitesmoke;"><?php echo $_SESSION['firstname_phpexam'] ?></span>   
                <span onclick="location.href='logout.php'" style="padding: 0.5em;vertical-align: middle;border-radius:10px;cursor:pointer; border: 2px solid whitesmoke;">Logout</span>
            </div>
        <div style="margin: auto 3.5em; display: inline-block;padding: 2em;padding-top: 3em;">
         <div class="editpro" style="float:left">
    <form class="form" method="post" action="update.php">
  <h2>Edit Profile:</h2>
  <span id="error" style="color: red"></span>
  <p type="First Name:"><input type="text" required name="firname" placeholder="Write your first name here.."></input></p>
  <p type="Last Name:"><input type="text" required name="lasname" placeholder="Write your last name here.."></input></p>
  <p type="Email:"><input name="mailer" type="text" required autocomplete="off" type="email" placeholder="Enter email"></input></p>
  <p type="Password:"><input name="passer" autocomplete="on" type="password" required placeholder="Enter Password"></input></p>
  <p type="Phone:">
      <input type="tel" required name="phone" >
  </p>
  <p type="Address:">
      <textarea name="address"></textarea>
     
  </p>
<button type="submit">Save</button>
  <div>
  </div>
    </form></div><div class="attempts" >
        <button onclick="location.href='index.php'" type="submit">New Exam</button>
        <?php
$conn = new mysqli("localhost","root", "","krishna");
$i=0;
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT score,examdate FROM scores s,register r where r.user_key='".$_SESSION['login_user_key']."' and s.userid=r.id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        ?><p><h3 style="color: whitesmoke">Attempts</h3></p><?php
        while($row = $result->fetch_assoc()) { ?>
        
        <h4 style="color: whitesmoke">Marks:<?php echo " ".$row['score']."    " ?>Date:<?php echo " ".$row['examdate'] ?></h4>
             
    <?php
            $i++;
        }
        }
    
    $conn->close();
    
    ?>
         </div></div>
        <script>
      var url_string = window.location.href;
var url = new URL(url_string);
var err = url.searchParams.get("text");
document.getElementById("error").innerHTML=err;                            
    </script>
</body>
</html>


