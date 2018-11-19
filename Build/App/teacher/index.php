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
<script>
  function showHint01(str) {
      if (str.length == 0) { 
        document.getElementById("txtHint01").innerHTML = "";
        return;
        } else {
         var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("txtHint01").innerHTML = this.responseText;
            }
      }
      xmlhttp.open("GET", "gethint01.php?q="+str, true);
      xmlhttp.send();
   }
  }
  function showHint02(str) {
      if (str.length == 0) { 
        document.getElementById("txtHint02").innerHTML = "";
        return;
        } else {
         var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("txtHint02").innerHTML = this.responseText;
            }
      }
      xmlhttp.open("GET", "gethint02.php?q="+str, true);
      xmlhttp.send();
   }
  }
  function squery3() {
  var h=name+", "+Date();
    document.getElementById("txtHint03").innerHTML = h;//redundancy used for understanding 
                  //use this variable name to query the database.
                  //see codes of (php-ajax) ajax php and database.
    if (name.length == 0) {
      document.getElementById("txtHint03").innerHTML = "";
      return;
      } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint03").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "queryengine01.php?q=" + name, true);
                        //sends query to gethint.php
                        //update gethint.php build
       xmlhttp.send();
      }
    }
    function squery4() {
    if (name.length == 0) {
      document.getElementById("txtHint04").innerHTML = "";
      return;
      } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint04").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "queryengine03.php?q=" + name, true);
                        //sends query to gethint.php
                        //update gethint.php build
       xmlhttp.send();
      }
    }
</script>
</head>
  <body>
     <nav class="navbar navbar-fixed-top navbar-dark ">
            <ul>
              <li><a href="http://localhost/Build">Home</a></li>
              <li><a href="http://localhost/Build/App/teacher">Teacher</a></li>
            </ul>
      </nav>
    <div class="container content">
      <hr>
      <br>
      <br>
      <br>
      <br>
        <div class="row" style="display: flex;">
          <div class="col-md-5 title-logo"><img src="./stylesheets/download.png" class="img-responsive"></div>
          <div class="col-md-7 text-right">
            <h3 class="title-super text-uppercase text-thin">Teacher Portal</h3>
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
        </div>
        <hr>
        <div class="row" style="display: inline-flex;">
          <div class="col-md-2">
            <a href="http://localhost/Build/App/teacher/atten_update_edit"><button><img src="./stylesheets/attendance.jpg" height=100px width=100px class="img-responsive"></button></a>
            <br>
          </div>
          <div class="col-md-10" style="display: grid;">
            <h4> Update attendance</h4>
            <br>
            <p style="color: #737373"> This function allows you completely update attendance of student. Requires usn of the student </p>
          </div>
        </div>
        <br>
        <hr>
        <div class="row" style="display: inline-flex;">
          <div class="col-md-2">
            <a href="http://localhost/Build/App/teacher/mark_update_edit"><button><img src="./stylesheets/marks.jpg" height=100px width=100px class="img-responsive"></button></a>
            <br>
          </div>
          <div class="col-md-10" style="display: grid;">
            <h4> Update Marks</h4>
            <br>
            <p style="color: #737373"> This function allows you completely update Marks of student. Requires usn of the student </p>
          </div>
        </div>
        <br>
        <hr>
        <!-- ctrl+shift+/ -->
        <!-- From here the functionality must be updated -->
        <div class="row" style="display: inline-flex;">
          <div class="col-md-2">
              <img src="./stylesheets/attendance2.jpg" height="100px" width="100px" class="img-responsive">
            <br>
          </div>
          <div class="col-md-10" style="display: grid;">
            <h4> View Attendance</h4>
            <br>
            <p style="color: #737373"> This function allows you completely View attendance of student. Requires usn of the student </p>
            <p><b>Start typing a USN in the input field below:</b></p>
            <form> 
            USN: <input type="text" onkeyup="showHint01(this.value)">
            </form>
            <p>Attendance: <span id="txtHint01"></span></p>
          </div>
        </div>
        <br>
        <hr>
        <div class="row" style="display: inline-flex;">
          <div class="col-md-2">
            <img src="./stylesheets/marks2.jpg" height=100px width=100px class="img-responsive">
            <br>
          </div>
          <div class="col-md-10" id="hmm" style="display: grid;">
            <h4> View Marks</h4>
            <br>
            <p style="color: #737373"> This function allows you completely View Marks of student. Requires usn of the student </p>
            <p><b>Start typing a USN in the input field below:</b></p>
            <form> 
            USN: <input type="text" onkeyup="showHint02(this.value)">
            </form>
            <p>Marks: <span id="txtHint02"></span></p>
          </div>
        </div>
        <br>
        <hr>
        <div class="row" style="display: inline-flex;">
          <div class="col-md-2">
            <a href="http://localhost/Build/App/teacher/Attendance_all"><button><img src="./stylesheets/attendance2.jpg" height=100px widht=100px class="img-responsive"></button></a>
            <br>
          </div>
          <div class="col-md-10" style="display: grid;">
            <h4> View All Attendance</h4>
            <br>
            <p style="color: #737373"> This function allows you completely View attendance of all students.</p>
          </div>
        </div>
        <br>
        <hr>
        <div class="row" style="display: inline-flex;">
          <div class="col-md-2">
            <a href="http://localhost/Build/App/teacher/marks_all"><button><img src="./stylesheets/marks2.jpg" height=100px weight=100px class="img-responsive"></button></a>
            <br>
          </div>
          <div class="col-md-10" style="display: grid;">
            <h4> View All Marks</h4>
            <br>
            <p style="color: #737373"> This function allows you completely View Marks of all students.</p>
          </div>
        </div>
        <br>
        <hr>
        <div class="row" style="display: inline-flex;">
          <div class="col-md-2">
            <img src="./stylesheets/average.jpg" height=100px width=100px class="img-responsive">
            <br>
          </div>
          <div class="col-md-10" style="display: grid;">
            <h4> Class Average </h4>
            <br>
            <p style="color: #737373"> This function allows you to view Avergae marks of all students of a given sem. </p>
            <p>
              <button onclick="squery3()">Click me?</button>
              <p><span id="txtHint03"></span></p>
            </p>
          </div>
        </div>
        <br>
        <hr>
        <div class="row" style="display: inline-flex;">
          <div class="col-md-2">
            <img src="./stylesheets/survey.jpg" height=100px width=100px class="img-responsive">
            <br>
          </div>
          <div class="col-md-10" style="display: grid;">
            <h4> Class Survey </h4>
            <br>
            <p style="color: #737373"> This function allows you to view Avergae marks of all students of a given sem. </p>
            <p>
              <button onclick="squery4()">Click me?</button>
              <p><span id="txtHint04"></span></p>
            </p>
          </div>
        </div>
        <br>
        <hr>
        <div class="row" style="display: inline-flex;">
          <div class="col-md-2">
            <a href="http://localhost/Build/App/teacher/mentor_edit"><button><img src="./stylesheets/mentor.jpg" width=100px height=100px class="img-responsive"></button></a>
            <br>
          </div>
          <div class="col-md-10" style="display: grid;">
            <h4> Mentor Reports</h4>
            <br>
            <p style="color: #737373"> This function allows you to write a report on the students performance. Requires usn of the student </p>
          </div>
        </div>
        <br>
        <hr>

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
  <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/tether/1.3.2/js/tether.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
</body>
</html>