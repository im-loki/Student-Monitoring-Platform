<?php
session_start();
// define variables and set to empty values

$usn=$usnErr=$Subject1=$Subject1Err=$Subject2=$Subject2Err=$Subject3=$Subject3Err=$Subject4=$Subject4Err=$Subject5=$Subject5Err=$Subject6=$Subject6Err=$comment=$sem=$semErr="";
$flag=1;

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
  
  if (empty($_POST["Subject1"])) {
    $Subject1Err = "Subject-attandance is required";
    $flag=0;
  } else {
    $Subject1 = test_input($_POST["Subject1"]);
    // check if e-mail address is well-formed
      if (!preg_match("/^[0-9]*$/",$Subject1)) {
      $Subject1Err = "Only numbers";
      $flag=0;
    }
  }

  if (empty($_POST["Subject2"])) {
    $Subject2Err = "Subject-attandance is required";
    $flag=0;
  } else {
    $Subject2 = test_input($_POST["Subject2"]);
    // check if e-mail address is well-formed
      if (!preg_match("/^[0-9]*$/",$Subject2)) {
      $Subject2Err = "Only numbers";
      $flag=0;

    }
  }

  if (empty($_POST["Subject3"])) {
    $Subject3Err = "Subject-attandance is required";
    $flag=0;
  } else {
    $Subject3 = test_input($_POST["Subject3"]);
    // check if e-mail address is well-formed
      if (!preg_match("/^[0-9]*$/",$Subject3)) {
      $Subject3Err = "Only numbers";
      $flag=0;
    }
  }

  if (empty($_POST["Subject4"])) {
    $Subject4Err = "Subject-attandance is required";
    $flag=0;
  } else {
    $Subject4 = test_input($_POST["Subject4"]);
    // check if e-mail address is well-formed
      if (!preg_match("/^[0-9]*$/",$Subject4)) {
      $Subject4Err = "Only numbers";
      $flag=0;
    }
  }

  if (empty($_POST["Subject5"])) {
    $Subject5Err = "Subject-attandance is required";
    $flag=0;
  } else {
    $Subject5 = test_input($_POST["Subject5"]);
    // check if e-mail address is well-formed
      if (!preg_match("/^[0-9]*$/",$Subject5)) {
      $Subject5Err = "Only numbers";
      $flag=0;
    }
  }

  if (empty($_POST["Subject6"])) {
    $Subject6Err = "Subject-attandance is required";
    $flag=0;
  } else {
    $Subject6 = test_input($_POST["Subject6"]);
    // check if e-mail address is well-formed
      if (!preg_match("/^[0-9]*$/",$Subject6)) {
      $Subject6Err = "Only numbers";
      $flag=0;
    }
  }

  if (empty($_POST["sem"])) {
    $semErr = "SEM is required";
    $flag=0;
  } else {
    $sem = test_input($_POST["sem"]);
  }

  if($flag==1){
    $msg="in flag";
    echo "inside flag==1";
    $db = mysqli_connect('localhost', 'root', '', 'att_trial');

    $query = "INSERT INTO trial (usn, subject1, subject2,subject3,subject4,subject5,subject6,sem) 
          VALUES('$usn', '$Subject1', '$Subject2','$Subject3','$Subject4','$Subject5','$Subject6','$sem')";
    mysqli_query($db, $query);
    header('location: /trial/atten_update_edit/confirmation.php');
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>