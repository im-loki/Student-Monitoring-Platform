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
$dbname = "registration";

$q=$_GET['q'];
echo "$q".", your attendance details are:"."<br>"."<hr>";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT USERNAME,EMAIL FROM users WHERE USERNAME="."'".$q."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    echo "<table>
    <tr>
    <th>Name</th>
    <th>Email</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['USERNAME'] . "</td>";
        echo "<td>" . $row['EMAIL'] . "</td>";
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