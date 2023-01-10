<?php

require 'change_url_here.php';


// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'php-task');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql =  "SELECT * FROM player";

$result = $conn->query($sql);

?>

<html>
<head><title>Player</title></head>
<body>
<a href="<?=$url?>/index.php">Home</a>

<h3>Player</h3>

<table>
    <tr>
        <th>Username</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
    </tr>
    <?php
    while($row = $result->fetch_assoc()) { 
        echo "<tr><td>".$row['username']."</td>";
        echo "<td>".ucwords(strtolower($row['fname']))."</td>";
        echo "<td>".ucwords(strtolower($row['lname']))."</td>";
        echo "<td>".$row['age']."</td></tr>";
    }
    ?>
</table>

</body>
</html>