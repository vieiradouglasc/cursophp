<html>
    <head>
        <title>Exercício 2 - Array Multidimensional</title>
    </head>
    <body>
    <?php
        // Variáveis Datas
         $diaSemanaExtenso = date('l');
         $diaSemanaNumero = date('w');

        // Array Multidimensional Prato do Dia
        $cardapioDia[0][1] = "Lasanha";
        $cardapioDia[1][1] = "Frango";
        $cardapioDia[2][1] = "Arroz";
        $cardapioDia[3][1] = "Feijoada";
        $cardapioDia[4][1] = "Nhoque";
        $cardapioDia[5][1] = "Bacalhau";
        $cardapioDia[6][1] = "Feijão";

        //Array Multidimensional Valores dos Pratos
        $cardapioDia[0][2] = "12,60";
        $cardapioDia[1][2] = "10,00";
        $cardapioDia[2][2] = "09,40";
        $cardapioDia[3][2] = "11,20";
        $cardapioDia[4][2] = "08,50";
        $cardapioDia[5][2] = "15,20";
        $cardapioDia[6][2] = "10,00";

        // Mensagem
        echo "Hoje é " . $diaSemanaExtenso . "<br>";
        echo "O prato é " . $cardapioDia[$diaSemanaNumero][1] . " no valor de R$ " . $cardapioDia[$diaSemanaNumero][2];
    ?>
    </body>
</html>