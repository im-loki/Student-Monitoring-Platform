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
$q=$_GET['q'];
echo "$q".", your enrolled events are:"."<br>"."<hr>";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT e.event_name FROM events_list AS e, `participates` AS p WHERE p.usn = '$q' AND p.event_id = e.Event_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    // get dynamic header of the from course table. Refer the forms of teacher for reference.
    echo "<table style=\"background-color: bisque;\">
    <tr>
    <th style=\"background-color: black; color: white;\">Event Name</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['event_name'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";    
} else {
    echo "0 results";
}
$conn->close();
?> 
</body>
</html> 