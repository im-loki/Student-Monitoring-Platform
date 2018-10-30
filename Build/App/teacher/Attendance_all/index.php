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
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}
th {text-align: left;}
</style>
</head>
<body>
    <div class="container" style="padding: 20px">
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
                echo "<h2> SEM-4::</h2><br>";
                $q = "LOKESHWAR";
                $sql = "SELECT s.usn, s.name, s.sem, a.cin, a.attandance FROM student s, attandance a WHERE s.usn = a.usn and s.sem='4' ORDER BY s.usn, s.name, a.cin ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row

                    echo "<table>
                    <tr>
                    <th>usn</th>
                    <th>name</th>
                    <th>sem</th>
                    <th>cin</th>
                    <th>attandance</th>
                    </tr>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['usn'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['sem'] . "</td>";
                        echo "<td>" . $row['cin'] . "</td>";
                        echo "<td>" . $row['attandance'] . "</td>";
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
                echo "<h2> SEM-2::</h2><br>";
                $q = "LOKESHWAR";
                $sql = "SELECT s.usn, s.name, s.sem, a.cin, a.attandance FROM student s, attandance a WHERE s.usn = a.usn and s.sem='2' ORDER BY s.usn, s.name, a.cin ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row

                    echo "<table>
                    <tr>
                    <th>usn</th>
                    <th>name</th>
                    <th>sem</th>
                    <th>cin</th>
                    <th>attandance</th>
                    </tr>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['usn'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['sem'] . "</td>";
                        echo "<td>" . $row['cin'] . "</td>";
                        echo "<td>" . $row['attandance'] . "</td>";
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
                echo "<h2> SEM-1::</h2><br>";
                $q = "LOKESHWAR";
                $sql = "SELECT s.usn, s.name, s.sem, a.cin, a.attandance FROM student s, attandance a WHERE s.usn = a.usn and s.sem='1' ORDER BY s.usn, s.name, a.cin ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row

                    echo "<table>
                    <tr>
                    <th>usn</th>
                    <th>name</th>
                    <th>sem</th>
                    <th>cin</th>
                    <th>attandance</th>
                    </tr>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['usn'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['sem'] . "</td>";
                        echo "<td>" . $row['cin'] . "</td>";
                        echo "<td>" . $row['attandance'] . "</td>";
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