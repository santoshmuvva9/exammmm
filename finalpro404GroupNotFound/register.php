<?php 
include 'sessioninfo.php';
if($passed==true)
{
    header("location:profile.php");
}
?>
<html><head>         
    </head><title>Register for exam..</title>
<link href="registercss.css" rel="stylesheet" type="text/css"/>
<body>
    <form class="form" method="post" action="registration.php">
  <h2>Register</h2>
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
<button type="submit">Register</button>
  <div>
  </div>
</form>
        <script>
      var url_string = window.location.href;
var url = new URL(url_string);
var err = url.searchParams.get("text");
document.getElementById("error").innerHTML=err;                            
    </script>
</body>
</html>