<?php
    $notas [0] = rand(0, 100);
    $notas [1] = rand(0, 100);
    $notas [2] = rand(0, 100);
    $notas [3] = rand(0, 100);
    $notas [4] = rand(0, 100);

    $disciplinas = ["Português", "Matemática", "Geografia", "Ciências", "História"];

    $mediaNotas = array_sum($notas) / count($disciplinas);
        
    $maiorNota = max($notas);
    $maiorNotaDisciplina = array_search($maiorNota, $notas);

    $menorNota = min($notas);
    $menorNotaDisciplina = array_search($menorNota, $notas);
 ?>

 <html>
    <head>
        <title>Exercício 3 - Array</title>
    </head>
    <body>
        <table border="1">
            <tr align="center">
                <td colspan="5">Boletim</td>
            </tr>
            <tr align="center">
                <td><?php echo $disciplinas[0];?></td>
                <td><?php echo $disciplinas[1];?></td>
                <td><?php echo $disciplinas[2];?></td>
                <td><?php echo $disciplinas[3];?></td>
                <td><?php echo $disciplinas[4];?></td>
            </tr>
            <tr align="center">
                <td><?php echo $notas[0];?></td>
                <td><?php echo $notas[1];?></td>
                <td><?php echo $notas[2];?></td>
                <td><?php echo $notas[3];?></td>
                <td><?php echo $notas[4];?></td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr align="center">
                <td colspan="2">Média Aritimética</td>
            </tr>
            <tr align="center">
                <td>Medía das Notas</td>
                <td><?php echo number_format($mediaNotas, 2, '.', ''); ?></td>
            </tr>
        </table>
        <br>
        <table>
        <table border="1">
            <tr align="center">
                <td colspan="2">Maior Nota</td>
            </tr>
            <tr align="center">
                <td><?php echo $disciplinas[$maiorNotaDisciplina];?></td>
                <td><?php echo $maiorNota;?></td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr align="center">
                <td colspan="2">Menor Nota</td>
            </tr>
            <tr align="center">
                <td><?php echo $disciplinas[$menorNotaDisciplina];?></td>
                <td><?php echo $menorNota;?></td>
            </tr>
        </table>
    </body>
 </html>