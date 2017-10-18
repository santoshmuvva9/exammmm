<?php
include 'sessioninfo.php';
$id = $_POST['questionid'];
$conn = new mysqli("localhost","root", "","mysql");
$subj=$_POST['subq'];    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT question,option1,option2,option3,option4,answer,subject FROM questions where subject=".$subj." order by id LIMIT ".$id.",1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $ques = array(
    "ques" => $row['question'],
    "opt1"         => $row['option1'],
    "opt2"          => $row['option2'],
    "opt3"       => $row['option3'],
    "opt4"       => $row['option4'],
    "ans"       => $row['answer']
  );
  $quesen[] = $ques;
        }
    } else {
        echo "0 results";
    }
    $conn->close();
echo json_encode($quesen);
?>
