<?php

use function PHPSTORM_META\map;

    $temperatura[0] = rand(-20, 40);
    $temperatura[1] = rand(-20, 40);
    $temperatura[2] = rand(-20, 40);
    $temperatura[3] = rand(-20, 40);
    $temperatura[4] = rand(-20, 40);
    $temperatura[5] = rand(-20, 40);
    $temperatura[6] = rand(-20, 40);
    $temperatura[7] = rand(-20, 40);
    $temperatura[8] = rand(-20, 40);
    $temperatura[9] = rand(-20, 40);
    $temperatura[10] = rand(-20, 40);
    $temperatura[11] = rand(-20, 40);
      
    $mesesAno = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

    echo "Temperatura Anual";
    echo "<table border=1>";
    echo "<tr align=center>";
    echo "<td >Mês</td>";
    echo "<td>Temperatura</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $mesesAno[0] . "</td>";
    echo "<td>" . $temperatura[0] . "ºC</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $mesesAno[1] . "</td>";
    echo "<td>" . $temperatura[1] . "ºC</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $mesesAno[2] . "</td>";
    echo "<td>" . $temperatura[2] . "ºC</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $mesesAno[3] . "</td>";
    echo "<td>" . $temperatura[3] . "ºC</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $mesesAno[4] . "</td>";
    echo "<td>" . $temperatura[4] . "ºC</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $mesesAno[5] . "</td>";
    echo "<td>" . $temperatura[5] . "ºC</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $mesesAno[6] . "</td>";
    echo "<td>" . $temperatura[6] . "ºC</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $mesesAno[7] . "</td>";
    echo "<td>" . $temperatura[7] . "ºC</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $mesesAno[8] . "</td>";
    echo "<td>" . $temperatura[8] . "ºC</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $mesesAno[9] . "</td>";
    echo "<td>" . $temperatura[9] . "ºC</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $mesesAno[10] . "</td>";
    echo "<td>" . $temperatura[10] . "ºC</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $mesesAno[11] . "</td>";
    echo "<td>" . $temperatura[11] . "ºC</td>";
    echo "</tr>";
    echo "</table><br>";

    $mediaTempAnual = array_sum($temperatura) / 12;
    $temperaturaFormatada = number_format($mediaTempAnual, 2, '.', '');

    echo "<table border=1>";
    echo "<tr align=center>";
    echo "<td>Média da Temperatura Anual</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $temperaturaFormatada . "ºC</td>";
    echo "</tr>";
    echo "</table><br>";

    $valorMaximo = max($temperatura);
    $posicaoValorMaximo = array_search($valorMaximo, $temperatura);
    $valorMinimo = min($temperatura);
    $posicaoValorMinimo = array_search($valorMinimo, $temperatura);
    
    echo "<table border=1>";    
    echo "<tr align=center>";
    echo "<td>Mês</td>";
    echo "<td>Temp. Máx. Anual</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $mesesAno[$posicaoValorMaximo] . "</td>";
    echo "<td>" . $valorMaximo . "ºC</td>";
    echo "</tr>";
    echo "</table><br>";

    echo "<table border=1>";
    echo "<tr align=center>";
    echo "<td>Mês</td>";
    echo "<td>Temp. Min. Anual</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $mesesAno[$posicaoValorMinimo] . "</td>";
    echo "<td>" . $valorMinimo . "ºC</td>";   
    echo "</tr>";
    echo "</table><br>";
?>