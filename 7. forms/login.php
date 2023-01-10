<?php

require 'change_url_here.php';


if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $userpass = $_POST['userpass'];
  
  // Create connection
  $conn = mysqli_connect('localhost', 'root', '', 'php-task');
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql =  "SELECT * FROM player WHERE username = '$username' AND userpass = '$userpass'";

  $result = $conn->query($sql);

  if ($result) {
    if (mysqli_num_rows($result) > 0) {
      ?>

      <html>
      <head>
        <title>Forms</title>
        <style>
          h3{
            text-align: center;
            background-color: lightblue;
            padding: 10px 10px;
            border: 2px solid;
          }
        </style>
      </head>
      <body>

      <h3>Welcome <?php while($row = $result->fetch_assoc()) { echo $row['fname']." ".$row['lname']."!";} ?></h3>

      <a href="<?=$url?>/login.php">Log in again</a>

      </body>
      </html>

      <?php
    } else {
        echo 'not found';
    }
  } else {
      echo 'Error: ' . mysqli_error();
  }

  mysqli_close($conn);
  
} else {
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log in</title>
  </head>
  <body>
  <a href="<?=$url?>/index.php">Home</a>
    <form action="login.php" method="post">
      <label for="username">Username:</label>
      <input type="text" name="username" maxlength="10" value="">
      <br>
      <label for="userpass">Password:</label>
      <input type="password" name="userpass" maxlength="10">
      <br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>

<?php
}
?>