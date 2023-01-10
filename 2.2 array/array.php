<html>
<head><title>Array Functions</title></head>
<body>

<h1>Array Functions</h1>
Answer the following questions using array functions.<br>
Reference: <a href="http://my1.php.net/manual/en/ref.array.php">http://my1.php.net/manual/en/ref.array.php</a><br/><br/>

<?php $arr=array("the","QUICK","brown","fox","JUMPED","over","the","LAZY","dog"); ?>
<b>Raw array: <?php print_r($arr) ?></b><br/><br/>

<span style='color:red;'>
e.g.
A. Count number of elements in array<br>
Answer: count($arr)<br>
Output: <?=count($arr)?><br/><br/>

e.g.
B. Display all elements in array, on 1 line each.<br>
Answer: for($i=0;$i&lt;count($arr);$i++) {echo $arr[$i]."&lt;br&gt;";}<br>
Output: <?php for($i=0;$i<count($arr);$i++) {echo $arr[$i]."<br>";} ?><br/><br/>
</span>

1. Display all elements in array, sorted by alphabet A-Z.<br>
Answer: sort($arr);
for($i=0;$i&lt;count($arr);$i++) {
	echo $arr[$i]."&lt;br&gt;";
}<br>
Output: <?php
sort($arr);
for($i=0;$i<count($arr);$i++) {
	echo $arr[$i]."<br>";
}
?><br/><br/>

2. Display all elements in array, sorted by alphabet Z-A.<br>
Answer: rsort($arr);
for($i=0;$i&lt;count($arr);$i++) {
	echo $arr[$i]."&lt;br&gt;";
}<br>
Output: <?php
rsort($arr);
for($i=0;$i<count($arr);$i++) {
	echo $arr[$i]."<br>";
}
?><br/><br/>

3. Remove last element from array.<br>
Answer: array_pop($arr);
for($i=0;$i&lt;count($arr);$i++) {
	echo $arr[$i]."&lt;br&gt;";
}<br>
Output: <?php
array_pop($arr);
for($i=0;$i<count($arr);$i++) {
	echo $arr[$i]."<br>";
}
?><br/><br/>

4. Add element "apple" to array.<br>
Answer: array_push($arr, "apple");
for($i=0;$i&lt;count($arr);$i++) {
	echo $arr[$i]."&lt;br&gt;";
}<br>
Output: <?php
array_push($arr, "apple");
for($i=0;$i<count($arr);$i++) {
	echo $arr[$i]."<br>";
}
?><br/><br/>

5. Checks if the word "apple" appear in the array.<br>
Answer: $word = "apple";
if(in_array($word, $arr)){
	echo $word." found!";
} else {
	echo $word." not found!";
}<br>
Output: <?php 
$word = "apple";
if(in_array($word, $arr)){
	echo $word." found!";
} else {
	echo $word." not found!";
}
?><br/><br/>

6. Display all elements in array, in randomized order.<br>
Answer: shuffle($arr);
for($i=0;$i&lt;count($arr);$i++) {
	echo $arr[$i]."&lt;br&gt;";
}<br>
Output: <?php
shuffle($arr);
for($i=0;$i<count($arr);$i++) {
	echo $arr[$i]."<br>";
}
?><br/><br/>

7. Display a random elements in the array.<br>
Answer: $arr[array_rand($arr)]<br>
Output: <?=$arr[array_rand($arr)]?><br/><br/>

</body>
</html>