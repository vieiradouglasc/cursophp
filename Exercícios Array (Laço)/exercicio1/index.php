<?php
// variáveis de controle e declaração
$i = 0;
$mesesAno = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
// laço para criar as posições do array com seus números formatados
echo "Temperatura Anual <br>";
for ($i = 0; $i <= 11; $i++) {
    echo $mesesAno[$i] . " = " . $temperatura[$i] = rand(-20 , 40) . " ºC <br>";
};
//Média de temperatura anual
$mediaTempAnual = array_sum($temperatura) / count($mesesAno);
echo "<br> Média de temperatura anual <br>";
//Formatação temperatura anual
echo number_format($mediaTempAnual, 2, '.', '') . " ºC <br>";
//Maior temperatura ano
$maiorTemperatura = max($temperatura);
$maiorPosicaoTemperatura = array_search($maiorTemperatura, $temperatura);
echo "<br> Maior Temperatura Anual <br>";
echo $mesesAno[$maiorPosicaoTemperatura] . " = " . $maiorTemperatura . "<br>";
//Menor temperatura ano
$menorTemperatura = min($temperatura);
$menorPosicaoTemperatura = array_search($menorTemperatura, $temperatura);
echo "Menor Temperatura Anual <br>";
echo $mesesAno[$menorPosicaoTemperatura] . " = " . $menorTemperatura . "<br>";
?>
 