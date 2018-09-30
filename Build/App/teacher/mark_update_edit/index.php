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
<?php $subname=['Subject1','Subject2','Subject3','Subject4','Subject5','Subject6'] ;
$count=0; ?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ac";

    if (empty($_POST["sem"])) {
    $semErr = "SEM is required";
      } else {
        $sem = $_POST["sem"];
      }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT subject FROM courses WHERE sem="."'".$sem."'";
    $result = $conn->query($sql);
    $i=0;
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $subname[$i]=$row['subject'];
        $i++;
      }
    }
  ?>
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
    <h2>Update Marks Page.</h2>
    <p style="text-align: right"> <a href="http://localhost/Build/App/teacher/index.php?logout='1'" style="color: red;">logout</a> </p>
  </div>
</div>
<div class="row">
    <div class="col-md-8">
        <hr>
        <h4>Select the sem to obtain the subject-names</h4>
        <p><span class="error">* required field</span></p>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <hr>
  <form action="" method="post"> Sem:
    <input type="radio" name="sem" <?php if (isset($sem) && $sem=="3") echo "checked";?> value="3">3rd Sem
    <input type="radio" name="sem" <?php if (isset($sem) && $sem=="4") echo "checked";?> value="4">4th Sem
    <input type="radio" name="sem" <?php if (isset($sem) && $sem=="5") echo "checked";?> value="5">5th Sem 
    <input type="radio" name="sem" <?php if (isset($sem) && $sem=="6") echo "checked";?> value="6">6th Sem  
    <input type="radio" name="sem" <?php if (isset($sem) && $sem=="7") echo "checked";?> value="7">7th Sem 
    <input type="radio" name="sem" <?php if (isset($sem) && $sem=="8") echo "checked";?> value="8">8th Sem  
    <span class="error">* <?php echo $semErr;?></span>
    <input type="submit" name="submit" value="Submit"> 
    <br><hr> 
  </form>
</div>
</div>

<div class="row">
    <div class="col-md-12">
        <br>
  <form method="post" action="index.php">  
    USN: <input type="text" name="usn" value="<?php echo $usn;?>">
    <span class="error">* <?php echo $usnErr;?></span>
    <br><br>
    Int No.: <input type="text" name="intno" value="<?php echo $intno;?>">
    <span class="error">* <?php echo $intnoErr;?></span>
    <br><br>
    <?php echo $subname[0].":" ;?> <input type="text" name="Subject1" value="<?php echo $Subject1;?>">
    <span class="error">* <?php echo $Subject1Err;?></span>
    <br><br>
    <?php echo $subname[1].":" ;?> <input type="text" name="Subject2" value="<?php echo $Subject2;?>">
    <span class="error">* <?php  echo $Subject2Err;?></span>
    <br><br>
    <?php echo $subname[2].":" ;?> <input type="text" name="Subject3" value="<?php echo $Subject3;?>">
    <span class="error">* <?php  echo $Subject3Err;?></span>
    <br><br>
    <?php echo $subname[3].":" ; ?><input type="text" name="Subject4" value="<?php echo $Subject4;?>">
    <span class="error">* <?php  echo $Subject4Err;?></span>
    <br><br>
    <?php echo $subname[4].":" ; ?><input type="text" name="Subject5" value="<?php echo $Subject5;?>">
    <span class="error">* <?php echo $Subject5Err;?></span>
    <br><br>
    <?php echo $subname[5].":" ; ?><input type="text" name="Subject6" value="<?php echo $Subject6;?>">
    <span class="error">* <?php echo $Subject6Err;?></span>
    <br><br>

    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
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