<?php
include 'sessioninfo.php';
$textres = $_POST['markScore'];
$conn = new mysqli("localhost","root", "","examdb");    
$id=-1;
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $useridp="select id from register where user_key='".$_SESSION['login_user_key']."'";
    $resultid = $conn->query($useridp);
    if (mysqli_num_rows($resultid) >=1) {
    while($row = $resultid->fetch_assoc()) {
            $id=$row['id'];
        }
    }
    $sql = "insert into scores(userid,score,examdate) values(".$id.",".$textres.",now())";
    $result = $conn->query($sql);
    $conn->close();
    $sav="Attempt saved.";
echo json_encode($sav);
?>


