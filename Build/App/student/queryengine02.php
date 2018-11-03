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
    m.test1,
    m.test2,
    m.test3,
    m.finalia,
    m.cin,
    c.name
FROM
    marks m,
    course c

WHERE
    usn = '$q'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    // get dynamic header of the from course table. Refer the forms of teacher for reference.
    echo "<table>
    <tr>
    <th>test1</th>
    <th>test2</th>
    <th>test3</th>
    <th>final IA</th>
    <th>subject code</th>
    <th>subject name</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['test1'] . "</td>";
        echo "<td>" . $row['test2'] . "</td>";
        echo "<td>" . $row['test3'] . "</td>";
        echo "<td>" . $row['finalia'] . "</td>";
        echo "<td>" . $row['cin'] . "</td>";
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