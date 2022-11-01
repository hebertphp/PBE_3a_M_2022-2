<?php
for ($i=0; $i<4; $i++) {//hora
 for ($j=0; $j<5; $j++) {//minuto
 echo "$i $j<br>";
 }
}
echo "<hr>";
for ($i=1; $i<3; $i++) {//
    for ($j=2; $j<4; $j++) {//
    echo "$i $j<br>";
    }
}
/*
$i  $j
1   2
1   3
2   2
2   3

*/


/*
$i  $j
0   0
0   1
0   2
0   3
0   4
1   0
1   1
1   2
1   3
1   4
2   0

*/
?>