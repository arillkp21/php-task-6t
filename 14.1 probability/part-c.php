<?php

function roleDice($no_of_dice){
    $results = array( 1 => 0 , 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0);

    for($n=1; $n<=$no_of_dice; $n++){
        for($i=1; $i<=100000; $i++){
            $results[rand(1,6)] ++;
        }
    }

    return $results;
}

?>

<form action="" method="post">
    <label for="no_of_dice">Number of Dice: </label>
    <input type="number" id="no_of_dice" name="no_of_dice" required>
    <input type="submit" name="submit" value="Roll">
</form>

<?php
if(isset($_POST['submit'])){
    $no_of_dice = $_POST['no_of_dice'];
?>
    <table border=1 style="text-align: center;">
        <tr>
            <th>Dice Number</th>
            <th>Frequency</th>
        </tr>
        <?php
        foreach (roleDice($no_of_dice) as $key => $value) {
            echo "<tr><td>".$key."</td>"."<td>".($value / (100000 * $no_of_dice) * 100)."%</td></tr>";
        }
        ?>
    </table>
<?php
}
?>