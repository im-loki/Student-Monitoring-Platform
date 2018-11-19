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
    $name = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student01";

// get the q parameter from URL
$q = $_REQUEST["q"];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtoupper($q);
    $len=strlen($q);
    if($len == 10){
        $hint = " ";
        $sql = "SELECT s.usn, s.name, s.sec, s.sem, a.cin, c.name AS SUBJECT, a.attandance FROM student s, attandance a, course c, teaches th WHERE s.usn = a.usn AND a.cin = c.cin AND s.usn = '$q' AND th.cin = a.cin AND th.ssn = '$name' ORDER BY s.usn, s.sec, s.sem, c.cin";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row

                    echo "<table>
                    <tr>
                    <th>usn</th>
                    <th>name</th>
                    <th>sec</th>
                    <th>sem</th>
                    <th>cin</th>
                    <th>Subject</th>
                    <th>attandance</th>
                    </tr>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['usn'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['sec'] . "</td>";
                        echo "<td>" . $row['sem'] . "</td>";
                        echo "<td>" . $row['cin'] . "</td>";
                        echo "<td>" . $row['SUBJECT'] . "</td>";
                        echo "<td>" . $row['attandance'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";   
        } else {
            $hint = "0 results";
        }
        }
    }

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "Enter a Valid USN" : $hint;
?>

</body>
</html>