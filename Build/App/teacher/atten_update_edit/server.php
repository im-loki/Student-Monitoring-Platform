<?php
session_start();
// define variables and set to empty values

$usn=$usnErr=$attn=$attnErr=$comment=$sem=$semErr=$code=$codeErr="";
$flag=1;



echo "in server";
echo $usn;
echo $attn;
echo "<br>";
echo $code;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["usn"])) {
    $usnErr = "USN is required";
    $flag=0;
  } else {
    $usn = strtoupper(test_input($_POST["usn"]));
    // check if name only contains letters and whitespace
    if (!preg_match("/^[1-9]+[A-Z ]+[1-9]+[A-Z]+[1-9]+$/",$usn)) {
      $usnErr = "Only letters and white space allowed";
      $flag=0;
    }
  }
  echo $usn;
  if (empty($_POST["attn"])) {
    $attnErr = "Subject-attandance is required";
    $flag=0;
  } else {
    $attn = test_input($_POST["attn"]);
    // check if e-mail address is well-formed
      if (!preg_match("/^[0-9]*$/",$attn)) {
      $attnErr = "Only numbers";
      $flag=0;
    }
  }
  echo $attn;
  if (empty($_POST["code"])) {
    $codeErr = "code-attandance is required";
    $flag=0;
  } else {
    $code = test_input($_POST["code"]);
    }
  }
  echo $code;
  echo "<br>";
  if (empty($_POST["sem"])) {
    $semErr = "SEM is required";
    $flag=0;
  } else {
    $sem = test_input($_POST["sem"]);
  }
  echo $sem;
  echo " ";
  echo $flag;
  echo " ";
  echo $code;
  if($flag==1){
    $msg="in flag";
    echo "inside flag==1";
    $db = mysqli_connect('localhost', 'root','', 'student01');

    $query = "INSERT INTO attandance (usn, cin,attandance) 
          VALUES('$usn', '$code','$attn')";
    mysqli_query($db, $query);
    echo $usn;
    echo $attn;
    header('location: /Build/App/teacher/atten_update_edit/confirmation.php');
  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>