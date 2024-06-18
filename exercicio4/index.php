<?php
    $diaSemanaExtenso = date('l');
    $diaSemanaNumero = date('w') - 1;
    $diasOrixas = [
        ["Exú/Obaluaiê", "Ogum", "Xangô", "Iansã", "Oxalá", "Yemanjá/Oxum/Nanâ", "Todos os Orixás"],
        ["Laroye/Atotô", "Patakori Ogum", "Kaô Kabecilê Xangô", "Eparrey Oyá", "Odoya Yemanjá/Ora Yê Yê Oxum/Saluba Nanã", "Salve Todos os Orixás!"]
    ];

    echo "Hoje é " . $diaSemanaExtenso . "<br>";
    echo "Então hoje é dia de " . $diasOrixas[0][$diaSemanaNumero] . "<br>";
    echo "E a saudação é: " . $diasOrixas[1][$diaSemanaNumero];
?>