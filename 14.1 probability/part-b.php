<?php

function roleDice($no_of_dice){
    $results = array( 1 => 0 , 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0);

    for($n=1; $n<=$no_of_dice; $n++){
        for($i=1; $i<=1000; $i++){
            $results[rand(1,6)] ++;
        }
    }

    return $results;
}

?>

<table border=1 style="text-align: center;">
    <tr>
        <th>Dice Number</th>
        <th>Frequency</th>
    </tr>
    <?php
    foreach (roleDice(2) as $key => $value) {
        echo "<tr><td>".$key."</td>"."<td>".$value."</td></tr>";
    }
    ?>
</table>