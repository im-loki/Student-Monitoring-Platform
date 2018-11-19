
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang=en><head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="./stylesheets/bootstrap.min.css">
<link rel="stylesheet" href="./stylesheets/main.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.bootcss.com/tether/1.3.2/css/tether.min.css" rel="stylesheet">
<link href="https://cdn.bootcss.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="./stylesheets/main.css">
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student01";

$q=$_SESSION['username'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo $q;

$sql = "SELECT c.cin,c.name FROM course c,student s WHERE s.usn='$q' and s.sem=c.sem";
$result = $conn->query($sql);
$i=0;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $subcode[$i]=$row['cin'] ;
        $subname[$i]=$row['name'] ;
        $i=$i+1;
    }   
  }
    else {
    echo "0";
    $subcode[0]='0';
    $subname[0]='0';
}
$conn->close();
?> 
</head>
<body>
	 <nav class="navbar navbar-fixed-top navbar-dark ">
            <ul>
              <li><a href="http://localhost/Build">Home</a></li>
              <li><a href="http://localhost/Build/App/student">Student</a></li>
              <li><a href="http://localhost/Build/App/materials">Materials</a></li>
              <li><a href="http://localhost/Build/App/events">Events</a></li>
              <li><a href="http://localhost/Build/App/survey">Survey</a></li>
            </ul>
      </nav>
      <div class="container content">
      <hr>
      <br>
      <br>
        <div class="row" style="display: flex;">
          <div class="col-md-5 title-logo"><img src="./stylesheets/100x100" class="img-responsive"></div>
          <div class="col-md-7 text-right">
            <h3 class="title-super text-uppercase text-thin">Student Survey</h3>
            <h6 class="text-uppercase">Answer the question by assigning value between (1-5)</h6>
          </div>
        </div>
        <div>
          <hr>
        </div>
        <div class="row text-center">
          <div class="col-md-12">
              <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success" >
                  <h3>
                    <?php 
                      echo $_SESSION['success']; 
                      unset($_SESSION['success']);
                    ?>
                  </h3>
                </div>
              <?php endif ?>
              <!-- logged in user information -->
              <?php  if (isset($_SESSION['username'])) : ?>
                <p style="text-align: right">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                <?php
                    $name = $_SESSION['username'];
                   echo '<script>'; 
                   echo 'var name = '.json_encode($name).';';
                   echo '</script>';
                   ?>
                <p style="text-align: right"> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
              <?php endif ?>
        </div>
        </div>
        <div class="row text-center from_this">
          <h2 class="text-muted">Survey</h2>
        </div>
        <div class="row text-center" style="
        display: inline-flex; ">
          <div class="col-md-6">
            <form action="actionpage.php" method="post" style="text-align: left">
              USN:<br>
              <input type="text" name="USN" value="<?php echo $_SESSION['username'] ?>">
              <br>
              UNbaised Correction:<br>
              <input type="text" name="Q1" value="5">
              <br>
              Subject Delivery:<br>
              <input type="text" name="Q2" value="5">
              <br>
              Class Interactions:<br>
              <input type="text" name="Q3" value="5">
              <br>
              How entertaining the class is:<br>
              <input type="text" name="Q4" value="5">
              <br>
              Subject:<br>
              <?php 
              $i=count($subname);
              for($x=0;$x<$i;$x++){
              echo "<input type=\"radio\" name=\"Subject\" value=\"$subcode[$x] \" checked > $subname[$x]";	
              echo "<br>";
              }
              ?>
              <br>
              <input type="submit" value="Submit">
            </form>
            <br><br>
          </div>
          <hr>
        </div>
        <br>
</body>