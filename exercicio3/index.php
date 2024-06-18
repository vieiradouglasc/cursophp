<?php
    $anoNascimento = 1991;
    $bebeAlcool = True;
    $bebidaFavorita = "Vinho";
    $idade = date('Y') - $anoNascimento;
    $bebidasFesta = ["Whisky", "Vodka", "Vinho"];
    $conviteFesta = null;

    if ($idade >= 18 && $bebeAlcool == True) {
        echo "Você foi convidada para festa!<br>";
        $conviteFesta = True;
    } else {
        echo "Não poderá ir na festa!<br>";
        $conviteFesta = False;
    };

    if ($conviteFesta == True) {
        if ($bebidaFavorita == $bebidasFesta[0]) {
            echo "Temos sua bebida favorita na festa!";
        } else if ($bebidaFavorita == $bebidasFesta[1]) {
            echo "Temos sua bebida favoria na festa";
        } else if ($bebidaFavorita == $bebidasFesta[2]) {
            echo "Temos sua bebida favorita na festa!";
        } else {
            echo "Infelizmente, não teremos " . $bebidaFavorita . ", traga para festa!";
        }
    } else {
        echo "VOCÊ NÃO IRÁ A FESTA! DESISTA!!!";
    }
?>