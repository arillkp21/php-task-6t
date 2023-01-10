<html>
<head><title>Fibonacci</title></head>
<body>

<h1>Fibonacci</h1>
<?php

if(isset($_POST["month"])){
  $month=$_POST["month"];
  $firstval=0;
  $secondval=1;
  $tempval=0;
	
  if($month>1){
    for ($x = 2; $x <= $month; $x++) {
      $tempval = $secondval;
      $secondval = $firstval + $secondval;
      $firstval = $tempval;
    }
  }
  
  echo "After $month month(s), there will be $secondval total pair of rabbit(s).";
}

?>

<br>
<br>
<form method="post" action="input.php">
Months: <input type="text" name="month" value="7" />
<input type="submit" name="btnsubmit" value="Calculate!" />
</form>

</body>
</html>