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
echo "$q".", your attendance details are:"."<br>"."<hr>";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT
    a.attandance AS a,
    a.cin as Subcode,
    c.name as name
FROM
    attandance a,
    course c
WHERE
    usn = '$q' AND a.cin = c.cin";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    // get dynamic header of the from course table. Refer the forms of teacher for reference.
    echo "<table style=\"background-color: bisque;\">
    <tr style=\"background-color: black; color: white;\">
    <th>Attandance</th>
    <th>Subject Code</th>
    <th>Subject Name</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['a'] . "</td>";
        echo "<td>" . $row['Subcode'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
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