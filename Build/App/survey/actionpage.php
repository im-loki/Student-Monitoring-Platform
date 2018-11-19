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
$usn = $_POST['USN'];
$q1 = $_POST['Q1'];
$q2 = $_POST['Q2'];
$q3 = $_POST['Q3'];
$q4 = $_POST['Q4'];
$cin = $_POST['Subject'];
echo $_POST['Subject'];
$db = mysqli_connect('localhost', 'root', '', 'student01');
$query = "select count(*) as count from survey where usn='$usn' and cin='$cin'";
$result = mysqli_query($db,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if (preg_match("/^[1-9]+$/",$q1) and preg_match("/^[1-9]+$/",$q2) and preg_match("/^[1-9]+$/",$q3) and preg_match("/^[1-9]+$/",$q4)){
  if($row['count']>=1){
    $sql = "update survey set q1='$q1', q2='$q2', q3='$q3', q4='$q4' where usn='$usn' and cin='$cin'";
    $result = $conn->query($sql);
    header('location: /Build/App/survey/confirmation.php');
  }else{
  	$sql = "insert into survey values('$usn','$cin','$q1','$q2','$q3','$q4')";
  	$result = $conn->query($sql);
    header('location: /Build/App/survey/confirmation.php');
  }
}else{
  	echo "<script>
  alert('Only Numbers allowed. Re-enter.');
  window.location.href='/Build/App/survey/survey01.php';
  </script>";
  }
?>