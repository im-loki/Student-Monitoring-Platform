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
$usn=strtoupper($q);
$event=1;
// Create connection
$db = mysqli_connect('localhost', 'root', '', 'student01');

$query = "INSERT INTO participates (usn,event_id) 
          VALUES('$usn', '$event')";
mysqli_query($db, $query);
echo "You have been added to the event";
?> 

</body>
</html> 