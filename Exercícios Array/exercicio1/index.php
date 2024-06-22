<?php

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

    $mediaTempAnual = array_sum($temperatura) / 12;
    $temperaturaFormatada = number_format($mediaTempAnual, 2, '.', '');
 
    $valorMaximo = max($temperatura);
    $posicaoValorMaximo = array_search($valorMaximo, $temperatura);
    $valorMinimo = min($temperatura);
    $posicaoValorMinimo = array_search($valorMinimo, $temperatura);

?>

<html>
    <head>
        <title>Exercício 5 - Temperaturas (Arra)</title>
    </head>
    <body>
        <table border="1">
            <tr align="center">
                <td colspan="2">Temperatura Anual</td>
            </tr>
            <tr align="center">
                <td>Mês</td>
                <td>Temperatura (ºC)</td>
            </tr>
            <tr align="center">
                <td><?php echo $mesesAno[0]; ?></td>
                <td><?php echo $temperatura[0]; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $mesesAno[1]; ?></td>
                <td><?php echo $temperatura[2]; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $mesesAno[3]; ?></td>
                <td><?php echo $temperatura[3]; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $mesesAno[4]; ?></td>
                <td><?php echo $temperatura[4]; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $mesesAno[5]; ?></td>
                <td><?php echo $temperatura[5]; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $mesesAno[6]; ?></td>
                <td><?php echo $temperatura[6]; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $mesesAno[7]; ?></td>
                <td><?php echo $temperatura[7]; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $mesesAno[8]; ?></td>
                <td><?php echo $temperatura[8]; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $mesesAno[9]; ?></td>
                <td><?php echo $temperatura[9]; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $mesesAno[10]; ?></td>
                <td><?php echo $temperatura[10]; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $mesesAno[11]; ?></td>
                <td><?php echo $temperatura[11]; ?></td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr>
                <td>Média da Temperatura Anual</td>
            </tr>
            <tr align="center">
                <td><?php echo $temperaturaFormatada; ?> ºC</td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr align="center">
                <td colspan="2">Temp. Máx. Anual</td>
            </tr>
            <tr align="center">
                <td><?php echo $mesesAno[$posicaoValorMaximo]; ?> ºC</td>
                <td><?php echo $valorMaximo; ?> ºC</td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr align="center">
                <td colspan="2">Temp. Min. Anual</td>
            </tr>
            <tr align="center">
                <td><?php echo $mesesAno[$posicaoValorMinimo]; ?> ºC</td>
                <td><?php echo $valorMinimo; ?> ºC</td>
            </tr>
        </table>
    </body>
</html>
