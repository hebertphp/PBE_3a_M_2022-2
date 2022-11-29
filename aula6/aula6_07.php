<?php
    //              0       1          2          3            4
    $nomes=array("Fulano","Beltrano","Sicrano", "Astrogildo","Bete");
    $total = count($nomes);//5
    $ult = count($nomes)-1;//4
    echo "Foram encontradas $total nomes no array.<br>";
    echo "Primeiro valor do array: ".$nomes[0]."<br>";
    echo "Último valor do array: ".$nomes[count($nomes)-1];//Bete
    echo "<hr>";
    for($i=0;$i<count($nomes);$i++){
        echo $nomes[$i]."<br>";
    }
    /*
    se tiver um array com 100 valores, posições numéricas, 
    qual a posição do primeiro e do último valor
    primeiro [0], último [99]
    */
?>