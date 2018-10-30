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
        $sql = "SELECT s.usn, s.name, s.sec, s.sem, m.cin, c.name as subject, m.test1, m.test2, m.test3, m.finalia FROM student s, marks m, course c WHERE s.usn = m.usn AND m.cin = c.cin and s.usn='$q' ORDER BY s.usn, s.sec, s.sem, c.cin ";
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
                        echo "<td>" . $row['tests3'] . "</td>";
                        echo "<td>" . $row['finalia'] . "</td>";
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