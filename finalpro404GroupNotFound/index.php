<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--Author Abhinay Bali-->
<?php
include 'sessioninfo.php';
if($passed==false)
{
    header("location:login.php");
}
?>
<html>
    <head>
        <title>EXAM</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <link href="css/animatecs.css" rel="stylesheet" type="text/css"/>
        <script src="animate.js" type="text/javascript"></script>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="Questions.js" type="text/javascript"></script>
        
    </head>
    <body>
        <div class="row">
            <div class='profile' style='height: 100px;z-index: 9999;vertical-align: middle ;position: absolute;padding: 0.6em;right: 0.6em;font-size: 1.5em;color: whitesmoke'>
               
                <img alt='profile' onclick="location.href='profile.php'" style='cursor:pointer;width: 40px;height: 40px;padding: 0.3em' src='profile.png'><span style="padding: 0.5em;vertical-align: middle;border-radius:10px;  border-left: 2px solid whitesmoke;"><?php echo $_SESSION['firstname_phpexam'] ?></span>   
                <span onclick="location.href='logout.php'" style="padding: 0.5em;vertical-align: middle;border-radius:10px;cursor:pointer; border: 2px solid whitesmoke;">Logout</span>
            </div>
            <div class="col-xs-2 maintab1">
                <p id="score">0</p>
                <span id='success'></span>
            </div>
            <div class="col-xs-10 maintab2">
                <div class="first">
                    <h3 class="question"></h3>
                    <ol class="options">
                    </ol>
                </div>
                <div class="second">
                    
                </div>
            </div>
        </div>
        
    </body>
</html>
