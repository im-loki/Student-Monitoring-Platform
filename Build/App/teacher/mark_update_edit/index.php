<?php include('hello.php') ?>
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
<?php $attnname=['Atten'] ;
$cin=['subjectcode'];
$ssn=$_SESSION['username'];
$count=0; ?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student01";
    echo "in sem";
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

    $sql = "select c.name as name,c.cin as cin from teacher t,teaches th,course c where t.ssn='$ssn' and t.ssn=th.ssn and th.cin=c.cin and c.sem='$sem'";
    echo "query done";
    $result = $conn->query($sql);
    $i=0;
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $attenname[$i]=$row['name'];
        $cin[$i]=$row['cin'];
        $i++;
      }
    }
    echo $cin[0];
  ?>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-fixed-top navbar-dark ">
            <ul>
              <li><a href="http://localhost/Build">Home</a></li>
              <li><a href="http://localhost/Build/App/teacher">Teacher</a></li>
            </ul>
      </nav>
<div class="row" style="display: flex;">
          <div class="col-md-5 title-logo"><img src="./stylesheets/100x100" class="img-responsive"></div>
          <div class="col-md-7 text-right">
            <h3 class="title-super text-uppercase text-thin">update atten</h3>
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
                <p style="text-align: right">Welcome <strong><?php echo $_SESSION['username']; 
                $ssn=$_SESSION['username']; ?></strong></p>
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
  <form method="post" action="hello.php">  
    USN: <input type="text" name="usn" value="<?php echo $usn;?>">
    <span class="error">* <?php echo $usnErr;?></span>
    <br><br>
    Code: <input type="text" name="code" value="<?php echo $cin[0]; ?>">
    <span class="error">* <?php echo $codeErr; ?></span>
    <?php echo $cin[0].":" ;?> <input type="text" name="test" value="<?php echo $test;?>">
    <span class="error">* <?php echo $testErr;?></span>
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
     testno:
    <input type="radio" name="tno" <?php if (isset($tno) && $tno=="1") echo "checked";?> value="1">1nd tno
    <input type="radio" name="tno" <?php if (isset($tno) && $tno=="2") echo "checked";?> value="2">2th tno
    <input type="radio" name="tno" <?php if (isset($tno) && $tno=="3") echo "checked";?> value="3">3th tno
    <span class="error">* <?php
     echo $tnoErr;?></span>
    <br>
    <input type="submit" name="submit" value="Submit">  
  </form>
    </div>
</div>
</div>
</body>
</html>