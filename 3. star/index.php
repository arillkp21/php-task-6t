<!DOCTYPE html>
<html>
<head><title>Nested Loops</title></head>
<body>
<h1>Nested Loops</h1>
<?php
$n = 5;
for($i=1; $i<=$n; $i++){
	for($j=1; $j<=$i; $j++){
		echo '*';
	}
	echo '<br>';
}
?>

<br>
<table border=1>
<?php
for($i=1; $i<=$n; $i++){
	echo "<tr>";
	for($j=1; $j<=$i; $j++){
		echo '<td>*</td>';
	}
    for($k=1; $k<=$n-$i; $k++){
		echo '<td>&nbsp;</td>';
	}
	echo '</tr>';
}
?>
</table>
<br>

<br>
<table border=1>
<?php
for($i=$n; $i>=1; $i--){
	echo "<tr>";
	for($j=$i; $j>=1; $j--){
		echo '<td>y</td>';
	}
    for($k=($n-$i); $k>=1; $k--){
		echo '<td>*</td>';
	}
	echo '</tr>';
}
?>
</table>
<br>

</body>
</html>
