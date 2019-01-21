<table cellpadding="5" border = "1">
<?php
for($i = 0; $i < 10; $i++) {
    echo'<tr>';
    for($j = 0; $j < 10; $j++)
    { 
        $s = $j * $i;
        echo '<td>';
        if($i === 0 && $j === 0) {
        	echo '*';
        	continue;
        }
        if($i === 0) {
        	echo $j;
        	continue;
        }
        if($j === 0) {
        	echo $i;
        	continue;
        }
			echo $s;
    }
}
?>
</table>
