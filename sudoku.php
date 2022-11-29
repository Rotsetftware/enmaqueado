<?php
for($i = 0; $i <= 2; $i++){    
    echo "\ni: $i -> ";
    for($j = 0; $j <= 2; $j++){
        echo "j: $j ->";
        $matriz[$i][$j] = $i+$j;
    }
}
echo "\nMatriz: ";
echo $matriz[0][2];
?>