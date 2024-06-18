<?php
    // Variáveis Datas
    $diaSemanaExtenso = date('l');
    $diaSemanaNumero = date('w');

    // // Array Multidimensional Prato do Dia
    // $cardapioDia[0][1] = "Lasanha";
    // $cardapioDia[1][1] = "Frango";
    // $cardapioDia[2][1] = "Arroz";
    // $cardapioDia[3][1] = "Feijoada";
    // $cardapioDia[4][1] = "Nhoque";
    // $cardapioDia[5][1] = "Bacalhau";
    // $cardapioDia[6][1] = "Feijão";

    // //Array Multidimensional Valores dos Pratos
    // $cardapioDia[0][2] = "12,60";
    // $cardapioDia[1][2] = "10,00";
    // $cardapioDia[2][2] = "09,40";
    // $cardapioDia[3][2] = "11,20";
    // $cardapioDia[4][2] = "08,50";
    // $cardapioDia[5][2] = "15,20";
    // $cardapioDia[6][2] = "10,00";

    $cardapioDia = [ 
    ["Lasanha", "Frango", "Arroz", "Feijoada", "Nhoque", "Bacalhau", "Feijão"],
    ["12,60", "10,00", "09,40", "11,20", "08,50", "15,20", "10,00"]
    ];
    // Mensagem
    echo "Hoje é " . $diaSemanaExtenso . "<br>";
    echo "O prato do dia é " . $cardapioDia[0][$diaSemanaNumero] . " no valor de R$ " . $cardapioDia[1][$diaSemanaNumero] . "\n";

?>