<?php
    $diaSemanaExtenso = date('l');
    $diaSemanaNumero = date('w');

    $pratoDia = ["Lasanha", "Frango", "Arroz", "Feijoada", "Nhoque", "Bacalhau", "Feijão"];
    $precoDia = [12.60, 10.00, 09.40, 11.20, 08.50, 15.20, 10.00];

    echo "Hoje é " . $diaSemanaExtenso . "<br>";
    echo "O prato é " . $pratoDia[$diaSemanaNumero] . " no valor de R$ " . $precoDia[$diaSemanaNumero];
?>