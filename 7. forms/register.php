<?php

require 'change_url_here.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <a href="<?=$url?>/index.php">Home</a>
    <form method="post" action="register.php">
      <label for="username">Username:</label>&nbsp;
      <input type="text" name="username" maxlength="10" value="" required>
      <br>
      <label for="userpass">Password:</label>&nbsp;
      <input type="password" name="userpass" maxlength="10" required>
      <br>
      <label for="fname">First Name:</label>&nbsp;
      <input type="text" name="fname" maxlength="30" value="" required>
      <br>
      <label for="lname">Last Name:</label>&nbsp;
      <input type="text" name="lname" maxlength="30" value="" required>
      <br>
      <label for="age">Age:</label>&nbsp;
      <input type="number" name="age" required>
      <br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>

<?php

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $userpass = $_POST['userpass'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $age = $_POST['age'];

  // Create connection
  $conn = mysqli_connect('localhost', 'root', '', 'php-task');
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO player (username, userpass, fname, lname, age)
  VALUES ('$username', '$userpass', '$fname', '$lname', $age)";

  if (mysqli_query($conn, $sql)) {
    echo "User $username created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>
