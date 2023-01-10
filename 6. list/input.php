<?php
	$arr = array(
		"101: orange juice - 5.2",
		"504: hot roll - 6.2",
		"106: lime juice - 3",
		"210: mineral water (s) - 2.6",
		"107: PEACH JUICE - 6.99",
		"211: mineral water (m) - 3.7",
		"500: hot dog (r) - 3.7",
		"212: mineral water (l) - 4.9",
		"509: popcorn - 4.2",
		"501: HOT DOG (l) - 5.1",
		"502: apple pie - 12.69",
		"100: apple juice - 4.8",
		"506: pine tart - 0.75",
		"108: coca COLA - 3.25",
	);
	
    // Answer 1
	echo "<b><u>1. Food Menu</u></b><br/>\n";
	for($i=0; $i<count($arr); $i++){
    	echo $arr[$i]."<br>";
    }
    echo "<br>";
	
    // Answer 2
	echo "<b><u>2. Food Menu</u></b><br/>\n";
    ?>
    <table border=1>
    <tr>
    	<th>Code</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php
	for($i=0; $i<count($arr); $i++){
    	$code_split = explode(": ", $arr[$i]);
        $name_price_split = explode(" - ", $code_split[1]);
        $code = $code_split[0];
        $name = $name_price_split[0];
        $price = $name_price_split[1];
    	echo "<tr><td>".$code."</td>";
        echo "<td>".$name."</td>";
        echo "<td>".$price."</td></tr>";
    }
    echo "</table><br>";

	// Answer 3
	echo "<b><u>3. Food Menu</u></b><br/>\n";
    ?>
    <style>
    .answer3 th{
    	background-color: blue;
        color: white;
    }
    .answer3 tr:nth-child(odd) {
    	background-color: yellow;
    }
    </style>
    <table class="answer3" border=1>
    <tr>
    	<th>Code</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php
    sort($arr);
	for($i=0; $i<count($arr); $i++){
    	$code_split = explode(": ", $arr[$i]);
        $name_price_split = explode(" - ", $code_split[1]);
        $code = $code_split[0];
        $name = $name_price_split[0];
        $price = $name_price_split[1];
        
        
    	echo "<tr><td>".$code."</td>";
        echo "<td>".ucwords(strtolower($name))."</td>";
        echo "<td>RM".number_format((float)$price, 2, '.', '')."</td></tr>";
    }
    echo "</table><br>";

    // Answer 4
    echo "<b><u>4. Food Menu</u></b><br/>\n";
    ?>
    <style>
    table.answer4{
    	border: 1px solid;
        border-collapse: collapse;
    }
    .answer4 tr{
    	width: 100%;
        max width: 50vp;
    }
    .answer4 td{
    	font-family: Arial, Helvetica, sans-serif;
        font-size: 10pt;
    	border: 1px solid;
        padding: 5px 5px;
        width: 23%;
    }
    .price{
    	color: red;
        font-weight: bold;
        float: right;
    }
    .colored{
    	background-color: yellow;
    }
    </style>
    <table class="answer4">
    <tr>
    <?php
	for($i=0; $i<count($arr); $i++){
    	if($i % 4 == 0 && $i != 0){
        	echo "</tr><tr>";
        }
    	$code_split = explode(": ", $arr[$i]);
        $name_price_split = explode(" - ", $code_split[1]);
        $code = $code_split[0];
        $name = $name_price_split[0];
        $price = $name_price_split[1];
        
        if($i == 1 || $i == 3 || $i == 4 || $i == 6 || $i == 9 || $i == 11 || $i == 12){
    		echo "<td class='colored'><b>".$code."</b><br>";
        } else {
    		echo "<td><b>".$code."</b><br>";
        }
        echo ucwords(strtolower($name));
        echo "<br><span class='price'>RM".number_format((float)$price, 2, '.', '')."</span></td>";
    }
    echo "</tr></table><br>";
?>