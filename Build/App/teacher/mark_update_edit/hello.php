<?php
session_start();
// define variables and set to empty values

$usn=$usnErr=$tno=$tnoErr=$test=$testErr=$comment=$sem=$semErr=$code=$codeErr="";
$flag=1;
echo $code;
echo "<br>";

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
  echo " ";
  
  if (empty($_POST["test"])) {
    $testErr = "Subject-Marks is required";
    $flag=0;
  } else {
    $test = test_input($_POST["test"]);
    // check if e-mail address is well-formed
      if (!preg_match("/^[0-9]*$/",$test)) {
      $testErr = "Only numbers";
      $flag=0;
    }
  }

  echo $test;
  echo " ";

  if (empty($_POST["sem"])) {
    $semErr = "SEM is required";
    $flag=0;
  } else {
    $sem = test_input($_POST["sem"]);
  }

  echo $sem;
  echo "<br>";

  if (empty($_POST["tno"])) {
    $tnoErr = "Internal NO is required";
    $flag=0;
  } else {
    $tno = test_input($_POST["tno"]);
  }

  if (empty($_POST["code"])) {
    $codeErr = "Internal NO is required";
    $flag=0;
  } else {
    $code = test_input($_POST["code"]);
  }

  echo $tno;
  echo "<br>";

  if($flag==1){
    $msg="in flag";
    echo "inside flag==1";
    $db = mysqli_connect('localhost', 'root', '', 'student01');

    $query = "select count(*) as count,test1,test2,test3 from marks where usn='$usn' and cin='$code'";
    $result = mysqli_query($db,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($row['count']==1){
      echo "Tuple already exists. Updating <br>";
      echo "Tno: ";echo $tno;
      $num = $row['count'];
      switch($tno){
        case 1:
        $query = "UPDATE marks set test1='$test' where usn='$usn' and cin='$code'";
        break;
        case 2:
        $query = "UPDATE marks set test2='$test' where usn='$usn' and cin='$code'";
        break;
        case 3:
        $query = "UPDATE marks set test3='$test' where usn='$usn' and cin='$code'";
        break;
      }
    }else{
      echo "<br>Tuple doesn't exists. Inserting <br>";
      echo "Tno: ";echo $tno;
      switch($tno){
        case 1:
        $query = "INSERT INTO marks (usn,cin,finalia,test1,test2,test3) 
          VALUES('$usn', '$code', '0', '$test','0','0')";
          break;
        case 2:
        $query = "INSERT INTO marks (usn,cin,finalia,test1,test2,test3) 
          VALUES('$usn', '$code', '0', '0','$test','0')";
          break;
        case 3:
        $query = "INSERT INTO marks (usn,cin,finalia,test1,test2,test3) 
          VALUES('$usn', '$code', '0', '0','0','$test')";
          break;
      }
    }
    mysqli_query($db, $query);
    header('location: /Build/App/teacher/mark_update_edit/confirmation.php');
    
    }
   echo $code;
echo "<br>";
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>