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
<link rel="stylesheet" type="text/css" href="/stylesheets/main.css">
<script>
function displayDate4() {
var h=name+", "+Date();
document.getElementById("demo4").innerHTML = h;//redundancy used for understanding 
//use this variable name to query the database.
//see codes of (php-ajax) ajax php and database.
if (name.length == 0) {
document.getElementById("demo4").innerHTML = "";
return;
} else {
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("demo4").innerHTML = this.responseText;
}
};
xmlhttp.open("GET", "queryengine04.php?q=" + name, true);
//sends query to gethint.php
//update gethint.php build
xmlhttp.send();
}
}
</script>
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
$sql = "SELECT event_id as id,event_name as name FROM events_list";
$result = $conn->query($sql);
$i=0;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $evid[$i]=$row['id'] ;
        $evname[$i]=$row['name'] ;
        $i=$i+1;
    }   
  }
    else {
    echo "0";
    $evid[0]='0';
    $evname[0]='0';
}
$conn->close();
?> 
</head>
  <body>
     <nav class="navbar navbar-fixed-top navbar-dark ">
            <ul>
              <li><a href="http://localhost/Build">Home</a></li>
              <li><a href="http://localhost/Build/App/student">Student</a></li>
              <li><a href="http://localhost/Build/App/events">Events</a></li>
              <li><a href="http://localhost/Build/App/survey">Survey</a></li>
            </ul>
      </nav>
    <div class="container">
      <hr>
      <br><br><br><br>
        <div class="row" style="display: flex;">
          <div class="col-md-5 title-logo"><img src="./stylesheets/events.png" class="img-responsive"></div>
          <div class="col-md-7 text-right">
            <h3 class="title-super text-uppercase text-thin">Event Portal</h3>
            <h4 class="text-uppercase">Information you need.</h4>
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
          <h2 class="text-muted">Services</h2>
          <hr>
        </div>
        <div class="row hm1">
          <div class="col-md-6 hm2">
            <br>
            <form action="actionpage.php" method="post" style="text-align: left" >
              <p>Select the Event you want to register for</p>
            <hr> 
              USN:<br>
              <input type="text" name="USN" value="<?php echo $_SESSION['username'] ?>">
              <br>
              <br>
              Event:<br>
              <?php 
              $i=count($evname);
              for($x=0;$x<$i;$x++){
              echo "<input type=\"radio\" name=\"Event\" value=\"$evid[$x] \" checked > $evname[$x]"; 
              echo "<br>";
              }
              ?>
              <br>
              <input type="submit" value="Submit">
            </form>
            <br><br>
          </div>
          <div class="col-md-6 hm3">
            <br>
            <p> Click the button below to check the events you have signed up for...</p>
            <hr>
            <p>
              <button onclick="displayDate4()">Click me?</button>
              <p id="demo4"><?php
                  echo "This is where javascript, php and mysql interactions are displayed";
                  ?></p>
            </p>
          </div>
          <hr>
        </div>
        <br><br><hr>
        <div class="row text-center">
          <div class="col-md-12">
          <p>This is beta site under development. Policies and features are prone to abruptly change during this stage.
          User discretion is advised.The developers of this website do not hold any liablities. Images used in this website are not owned by us.
          </p>
          <hr>
          <a style="text-align: center;">Copyright 2018</a>
          </div>
          <div class="col-md-12">
            <a class="btn btn-social-icon btn-github" href="https://www.github.com">
                  <span class="fa fa-github"></span>
            </a>
            <a class="btn btn-social-icon btn-twitter" href="https://www.twitter.com">
                  <span class="fa fa-twitter"></span>
            </a>
            <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com">
                  <span class="fa fa-facebook"></span>
            </a>
            <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com">
                  <span class="fa fa-linkedin"></span>
            </a>
            <br>
            <br>
            <hr>
        </div>
      </div>
    </div>
  <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/tether/1.3.2/js/tether.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
</body>
</html>
