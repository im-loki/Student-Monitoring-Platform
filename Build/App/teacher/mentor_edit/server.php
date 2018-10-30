<?php
session_start();
// define variables and set to empty values

$ssn=$usn=$usnErr=$comment=$commentErr="";
$flag=0;
$ssn= $_SESSION['username'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["usn"])) {
    $usnErr = "USN is required";
    $flag=0;
  } else {
    $usn = strtoupper(test_input($_POST["usn"]));
    // check if name only contains letters and whitespace
    if (!preg_match("/^[1-9]+[A-Z ]+[1-9]+[A-Z]+[1-9]+$/",$usn)) {
      $usnErr = "Only letters and white space allowed";
    }
    $flag=1;
  }

  if (empty($_POST["comment"])) {
    $commentErr = "comment is required";
    $flag=0;
  } else {
    $comment = (test_input($_POST["comment"]));
    if($flag==1) $flag = 1;
    // check if name only contains letters and whitespace
  }

  if($flag==1){
    $msg="in flag";
    echo "inside flag==1";
    echo $usn." ".$comment."<br>";
   $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student01";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "select s.ssn as ssn from student s, teacher t where t.ssn=s.ssn and s.usn='$usn'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        $ssn1=$row['ssn'];
      } echo "query1";
      if($ssn=$ssn1){
        $db = mysqli_connect('localhost', 'root', '', 'student01');
        $query = "INSERT INTO mentor (usn,comments) 
          VALUES('$usn', '$comment');";
        mysqli_query($db, $query);
        echo "query done.";
        header('location: /Build/App/teacher/mentor_edit/confirmation.php');
    }
  }

        echo $ssn;
    echo "<hr>";
    echo "empty";
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>