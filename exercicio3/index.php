<?php
    $anoNascimento = 2011;
    $bebeAlcool = "True";
    $maiorIdade = date('Y') - $anoNascimento;
    $bebidaPreferida = "Vinho";
    $bebidasFesta = ["Tequila", "Vodka", "Whisky"];
    
    if ($maiorIdade >= 18) {
        echo "Você foi convidada para festa!\n";
    }
    else {
        echo "Você é menor de idade, não podera ir a festa.";
    }   
?>