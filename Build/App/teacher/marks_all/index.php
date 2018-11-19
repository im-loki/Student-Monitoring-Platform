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
  $name=$_SESSION['username'];
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="./stylesheets/bootstrap.min.css">
<link rel="stylesheet" href="./stylesheets/main.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
    background-color: bisque;
}
table, td, th {
    border: 1px solid black;
    padding: 5px;
}
th {
    background-color: black; 
    color: white;
}
th {text-align: left;}
</style>
</head>
<body>
    <div class="container" style="padding: 20px">
        <div class="row">
            <div class="col-md-10">
                <h4 class="text-faded" style="color: grey;">Marks of Student belonging to the subject you are currently engaging</h4>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "student01";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                echo "<h2> SEM-7::</h2><br>";
                $q = "LOKESHWAR";
                $sql = "SELECT s.usn, s.name, s.sec, s.sem, m.cin, c.name as subject, m.test1, m.test2, m.test3, m.finalia FROM student s, marks m, course c,teaches th WHERE s.usn = m.usn AND m.cin = c.cin AND s.sem = '7' and m.cin=th.cin and th.ssn='$name' ORDER BY s.usn, s.sec, s.sem, c.cin ";
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
                    <th>test1</th>
                    <th>test2</th>
                    <th>test3</th>
                    <th>finalia</th>
                    </tr>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['usn'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['sec'] . "</td>";
                        echo "<td>" . $row['sem'] . "</td>";
                        echo "<td>" . $row['cin'] . "</td>";
                        echo "<td>" . $row['subject'] . "</td>";
                        echo "<td>" . $row['test1'] . "</td>";
                        echo "<td>" . $row['test2'] . "</td>";
                        echo "<td>" . $row['test3'] . "</td>";
                        echo "<td>" . $row['finalia'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";    
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "student01";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                echo "<h2> SEM-5::</h2><br>";
                $q = "LOKESHWAR";
                $sql = "SELECT s.usn, s.name, s.sec, s.sem, m.cin, c.name as subject, m.test1, m.test2, m.test3, m.finalia FROM student s, marks m, course c,teaches th WHERE s.usn = m.usn AND m.cin = c.cin AND s.sem = '5' and m.cin=th.cin and th.ssn='$name'  ORDER BY s.usn, s.sec, s.sem, c.cin ";
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
                    <th>test1</th>
                    <th>test2</th>
                    <th>test3</th>
                    <th>finalia</th>
                    </tr>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['usn'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['sec'] . "</td>";
                        echo "<td>" . $row['sem'] . "</td>";
                        echo "<td>" . $row['cin'] . "</td>";
                        echo "<td>" . $row['subject'] . "</td>";
                        echo "<td>" . $row['test1'] . "</td>";
                        echo "<td>" . $row['test2'] . "</td>";
                        echo "<td>" . $row['test3'] . "</td>";
                        echo "<td>" . $row['finalia'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";    
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "student01";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                echo "<h2> SEM-3::</h2><br>";
                $q = "LOKESHWAR";
                $sql = "SELECT s.usn, s.name, s.sec, s.sem, m.cin, c.name as subject, m.test1, m.test2, m.test3, m.finalia FROM student s, marks m, course c,teaches th WHERE s.usn = m.usn AND m.cin = c.cin AND s.sem = '3' and m.cin=th.cin and th.ssn='$name' ORDER BY s.usn, s.sec, s.sem, c.cin ";
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
                    <th>test1</th>
                    <th>test2</th>
                    <th>test3</th>
                    <th>finalia</th>
                    </tr>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['usn'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['sec'] . "</td>";
                        echo "<td>" . $row['sem'] . "</td>";
                        echo "<td>" . $row['cin'] . "</td>";
                        echo "<td>" . $row['subject'] . "</td>";
                        echo "<td>" . $row['test1'] . "</td>";
                        echo "<td>" . $row['test2'] . "</td>";
                        echo "<td>" . $row['test3'] . "</td>";
                        echo "<td>" . $row['finalia'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";    
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?> 
            </div>
        </div>
    </div>
</body>
</html> 