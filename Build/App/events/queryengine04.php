<!DOCTYPE html>
<html>
<head>
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
    text-align: left;
    background-color: black; color: white;
}
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
    $connection = mysqli_connect($servername,$username,$password,$dbname);
    //run the store proc
    $result = mysqli_query($connection, 
    "CALL event_signup('$q',@out);") or die("Query fail: " . mysqli_error());
    $row_cnt = mysqli_num_rows($result);
    if($row_cnt>0){
        echo "<table>
        <tr>
        <th>Event Name</th>
        </tr>";
        //loop the result set
        while ($row = mysqli_fetch_array($result)){   
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
    }
    else{
        echo "No Result. Please Sign up to events, and then try again.";
    }
    ?> 
</body>
</html> 