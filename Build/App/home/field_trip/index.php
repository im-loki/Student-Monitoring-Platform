<?php include('server.php') ?>
<!DOCTYPE HTML>  
<html>
<head>
    <link rel="stylesheet" type="text/css" href="">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="./stylesheets/bootstrap.min.css">
<link rel="stylesheet" href="./stylesheets/main.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-fixed-top navbar-dark ">
            <ul>
              <li><a href="http://localhost/Build">Home</a></li>
              <li><a href="http://localhost/Build/App/teacher">Teacher</a></li>
              <li><a href="http://localhost/Build/App/student">Student</a></li>
              <li><a href="http://localhost/Build/App/materials">Materials</a></li>
              <li><a href="http://localhost/Build/App/events">Events</a></li>
              <li><a href="http://localhost/Build/App/survey">Survey</a></li>
            </ul>
      </nav>
<div class="row">
  <div class="col-md-12">
    <h2>Field Trip Registration.</h2>
    <p style="text-align: right"> <a href="http://localhost/Build/App/teacher/index.php?logout='1'" style="color: red;">logout</a> </p>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
        <br>
  <form method="post" action="index.php">  
    USN: <input type="text" name="usn" value="<?php echo $usn;?>">
    <span class="error">* <?php echo $usnErr;?></span>
    <br><br>
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    phone no: <input type="text" name="phno" value="<?php echo $phno;?>">
    <span class="error">* <?php echo $phnoErr;?></span>
    <br><br>
    Email: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php  echo $emailErr;?></span>
    <br><br>
    Sem:
    <input type="radio" name="sem" <?php if (isset($sem) && $sem=="3") echo "checked";?> value="3">3rd Sem
    <input type="radio" name="sem" <?php if (isset($sem) && $sem=="4") echo "checked";?> value="4">4th Sem
    <input type="radio" name="sem" <?php if (isset($sem) && $sem=="5") echo "checked";?> value="5">5th Sem 
    <input type="radio" name="sem" <?php if (isset($sem) && $sem=="6") echo "checked";?> value="6">6th Sem  
    <input type="radio" name="sem" <?php if (isset($sem) && $sem=="7") echo "checked";?> value="7">7th Sem 
    <input type="radio" name="sem" <?php if (isset($sem) && $sem=="8") echo "checked";?> value="8">8th Sem  
    <span class="error">* <?php
     echo $semErr;?></span>
    <br>
    <input type="submit" name="submit" value="Submit">  
  </form>
    </div>
</div>
</div>
</body>
</html>