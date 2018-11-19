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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ola = "select name as name from teacher where ssn='$q';";
$hmm = $conn->query($ola);
if ($hmm->num_rows > 0) {
    while($nam00 = $hmm->fetch_assoc())
    $nam01="".$nam00['name']."";
} else{
    $nam01=$q;
}
echo $nam01.", your Subject's Survey details are:"."<br>"."<hr>";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT c.name, c.sem, AVG(q1 + q2 + q3 + q4) AS total FROM teacher t, teaches th, course c, survey s WHERE t.ssn = th.ssn AND th.cin = c.cin AND c.cin = s.cin AND t.ssn = '$q' GROUP BY c.sem ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    echo "<table>
    <tr>
    <th>Name</th>
    <th>Sem</th>
    <th>Satisfaction</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['sem'] . "</td>";
        echo "<td>" . round($row['total']) . "</td>";
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