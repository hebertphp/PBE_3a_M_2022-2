<?php
/*
$tabuada=2;
desafio:
2 x 0 = 0
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
.....
2 x 10 = 20
*/
for($tabuada=0;$tabuada<=10;$tabuada++){
    for($i=0;$i<=10;$i++){
        echo "$tabuada x $i = ".($tabuada*$i)."<br>";
    }
    echo "<hr>";
}    
?>