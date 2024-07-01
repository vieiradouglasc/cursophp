<?php
$i = 0;
$disciplinas = ["Português", "Matemática", "História", "Física", "Quimica"];

echo "Boletim Bimestral <br><br>";
for ($i > 0; $i <= 4; $i++){
    echo $disciplinas[$i] . " = " . $notas[$i] = rand(0 , 100) . "<br>";  
};

$mediaNotas = array_sum($notas) / count($disciplinas);
echo "<br> Média Notas Bimestrais <br>";
echo number_format($mediaNotas, 2, '.', '') . "<br><br>";

$maiorNota = max($notas);
$maiorNotaDisciplina = array_search($maiorNota, $notas);
echo "Maior Nota Bimestral <br>";
echo $disciplinas[$maiorNotaDisciplina] . " = " . $maiorNota . "<br>";

$menorNota = min($notas);
$menorNotaDisciplina = array_search($menorNota, $notas);
echo "Menor Nota Bimestral <br>";
echo $disciplinas[$menorNotaDisciplina] . " = " . $menorNota;
?>