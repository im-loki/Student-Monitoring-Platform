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
echo "$q".", mentoring topics:"."<br>"."<hr>";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT
    m.comments as c,
    m.ts as ts 
    FROM
    mentor m
    WHERE
    usn = '$q'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    // get dynamic header of the from course table. Refer the forms of teacher for reference.
    echo "<table>
    <tr>
    <th>time</th>
    <th>mentor advice</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['ts'] . "</td>";
        echo "<td>" . $row['c'] . "</td>";
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