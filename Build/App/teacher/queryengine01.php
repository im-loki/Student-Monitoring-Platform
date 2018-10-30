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
echo $nam01.", your class performance details are:"."<br>"."<hr>";

$sql = "SELECT c.sem, c.sec, s.NAME as name, AVG(test1) as test1, AVG(test2) as test2, AVG(test3) as test3, AVG(finalia) as finalia FROM class c, teacher t, teaches th, course s, marks m, student st WHERE t.ssn = '$q' AND th.ssn = t.ssn AND th.cin = s.cin AND m.cin = th.cin AND m.usn = st.usn AND st.sem = c.sem AND st.sec = c.sec GROUP BY c.sem, c.sec, s.name ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    echo "<table>
    <tr>
    <th>sem</th>
    <th>sec</th>
    <th>name</th>
    <th>test1</th>
    <th>test2</th>
    <th>test3</th>
    <th>finalia</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['sem'] . "</td>";
        echo "<td>" . $row['sec'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
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

</body>
</html> 