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
$evid = $_POST['Event'];
/*
echo $_POST['Event'];
echo $usn;
*/
	$sql = "insert into participates values('$evid','$usn')";
	$result = $conn->query($sql);
  if($result==true){
    // echo "Done.";
    echo "<script>
alert('You have been signed up for the event($evid).');
window.location.href='/Build/App/events/index.php';
</script>";
  }
  else{
    echo "<script>
alert('You have already previously signed up for the event($evid).');
window.location.href='/Build/App/events/index.php';
</script>";
  }
/* 
echo "<br>";
echo "Query done.";
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>