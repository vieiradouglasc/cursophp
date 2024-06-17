<?php
    $diaSemanaExtenso = date('l');
    $diaSemanaNumero = date('w');

    $pratoDia[0] = "Lasanha";
    $pratoDia[1] = "Frango";
    $pratoDia[2] = "Arroz";
    $pratoDia[3] = "Feijoada";
    $pratoDia[4] = "Nhoque";
    $pratodia[5] = "Bacalhau";
    $pratoDia[6] = "Feijão";

    $valorPrato[0] = "12,60";
    $valorPrato[1] = "10,00";
    $valorPrato[2] = "09,40";
    $valorPrato[3] = "11,20";
    $valorPrato[4] = "08,50";
    $valorPrato[5] = "15,20";
    $valorPrato[6] = "10,00";

    echo "Hoje é " . $diaSemanaExtenso . "<br>";
    echo "O prato é " . $pratoDia[$diaSemanaNumero] . " no valor de R$ " . $valorPrato[$diaSemanaNumero];
?>