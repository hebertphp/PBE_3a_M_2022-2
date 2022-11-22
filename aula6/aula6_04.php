<?php
//          0          1     1
$x=array(array(10,20),2022,"novembro");
//         [0]  [0][1]
echo $x[0][1];
$aluno = array(
    array("TBD","Fulano",123456789),
    array("TRC","Beltrano",234567890),
    array("TADS","Sicrano",345678901) 
);
echo "<br>Curso: " . $aluno[0][0] . "<br> Nome: " . $aluno[0][1] . "<br> RA:
" . $aluno[0][2];
echo "<hr>Curso: " . $aluno[1][0] . "<br> Nome: " . $aluno[1][1] . "<br> RA:
" . $aluno[1][2];
echo "<hr>Curso: " . $aluno[2][0] . "<br> Nome: " . $aluno[2][1] . "<br> RA:
" . $aluno[2][2];

echo "<br>".$aluno[2][0];
?>