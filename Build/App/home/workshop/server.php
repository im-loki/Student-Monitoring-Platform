<?php
session_start();
// define variables and set to empty values

$usn=$usnErr=$name=$nameErr=$phno=$phnoErr=$email=$emailErr=$sem=$semErr="";
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


  if (empty($_POST["name"])) {
    $nameErr = "name is required";
    $flag=0;
  } else {
    $name = strtoupper(test_input($_POST["name"]));
    // check if name only contains letters and whitespace
    if (!preg_match("/^[A-Z]+$/",$name)) {
      $nameErr = "Only Letters allowed";
      $flag=0;
    }
  }


  
  if (empty($_POST["phno"])) {
    $phnoErr = "Phone is required";
    $flag=0;
  } else {
    $phno = test_input($_POST["phno"]);
     if( $flag ==1 ) $flag=1;
    // check if e-mail address is well-formed
      if (!preg_match("/^[0-9]*$/",$phno)) {
      $phnoErr = "Only numbers";
      $flag=0;
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
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
    $event="Workshop";
    $db = mysqli_connect('localhost', 'root', '', 'event_trial');

    $query = "INSERT INTO trial (usn,name,phno,email,sem,event) 
          VALUES('$usn', '$name', '$phno', '$email','$sem','$event')";
    mysqli_query($db, $query);
    header('location: /Build/App/home/field_trip/confirmation.php');
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>