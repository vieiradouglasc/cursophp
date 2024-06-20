<?php
    $estoque = [
        ['id'=>1, 'nome'=>"Panela de Pressão 5L", 'qtd'=>12, 'preco'=>129.98],
        ['id'=>2, 'nome'=>"Jogo de Panela 5 pçs", 'qtd'=>8, 'preco'=>339.99],
        ['id'=>3, 'nome'=>"Liquidificador", 'qtd'=>5, 'preco'=>89.89],
        ['id'=>4, 'nome'=>"Batedeira", 'qtd'=>10, 'preco'=>119.99],
        ['id'=>5, 'nome'=>"Conjunto de Talheres", 'qtd'=>25, 'preco'=>49.99],
        ['id'=>6, 'nome'=>"Jogo de Prato 6 pçs", 'qtd'=>3, 'preco'=>235.99]  
    ];
    
    echo "<table border=1>";
    echo "<tr align=center>";
    echo "<td colspan=4>Controle de Estoque</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>ID do Produto</td>";
    echo "<td>Nome do Produto</td>";
    echo "<td>Qtd. em Estoque</td>";
    echo "<td>Preço Unitário</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $estoque[0]['id'] . "</td>";
    echo "<td>" . $estoque[0]['nome'] . "</td>";
    echo "<td>" . $estoque[0]['qtd'] . "</td>";
    echo "<td> R$ " . $estoque[0]['preco'] . "</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $estoque[1]['id'] . "</td>";
    echo "<td>" . $estoque[1]['nome'] . "</td>";
    echo "<td>" . $estoque[1]['qtd'] . "</td>";
    echo "<td> R$ " . $estoque[1]['preco'] . "</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $estoque[2]['id'] . "</td>";
    echo "<td>" . $estoque[2]['nome'] . "</td>";
    echo "<td>" . $estoque[2]['qtd'] . "</td>";
    echo "<td> R$ " . $estoque[2]['preco'] . "</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $estoque[3]['id'] . "</td>";
    echo "<td>" . $estoque[3]['nome'] . "</td>";
    echo "<td>" . $estoque[3]['qtd'] . "</td>";
    echo "<td> R$ " . $estoque[3]['preco'] . "</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $estoque[4]['id'] . "</td>";
    echo "<td>" . $estoque[4]['nome'] . "</td>";
    echo "<td>" . $estoque[4]['qtd'] . "</td>";
    echo "<td> R$ " . $estoque[4]['preco'] . "</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $estoque[5]['id'] . "</td>";
    echo "<td>" . $estoque[5]['nome'] . "</td>";
    echo "<td>" . $estoque[5]['qtd'] . "</td>";
    echo "<td> R$ " . $estoque[5]['preco'] . "</td>";
    echo "</tr>";
    echo "</table><br>";

    $idUsuario = rand(0, 8);
    $retornoUsuario = array_search($idUsuario, array_column($estoque, 'id'));

    echo "<table border=1 padding=1>";
    echo "<tr align=center>";
    echo "<td colspan=2>Insira o ID do Produto</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>ID do Produto</td>";
    echo "<td>" . $idUsuario . "</td>";
    echo "</tr>";
    echo "</table><br>";

    if ($retornoUsuario) {
        echo "<table border=1>";
        echo "<tr align=center>";
        echo "<td colspan=4>Produto Escolhido</td>";
        echo "</tr>";
        echo "<tr align=center>";
        echo "<td>ID do Produto</td>";
        echo "<td>Nome do Produto</td>";
        echo "<td>Qtd. Em Estoque</td>";
        echo "<td>Preço Unitário</td>";
        echo "</tr>";
        echo "<tr align=center>";
        echo "<td>" . $estoque[$retornoUsuario]['id'] . "</td>";
        echo "<td>" . $estoque[$retornoUsuario]['nome'] . "</td>";
        echo "<td>" . $estoque[$retornoUsuario]['qtd'] . "</td>";
        echo "<td>" . $estoque[$retornoUsuario]['preco'] . "</td>";
        echo "</tr>";
        echo "</table><br>";
    } else {
        echo "<table border=1>";
        echo "<tr>";
        echo "<td colspan=4>Produto Não Encontrado</td>";
        echo "</tr>";
        echo "</table><br>";
    };
     
    echo "<table border=1>";
    echo "<tr align=center>";
    echo "<td colspan=4>Relatório Final de Estoque</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>ID do Produto</td>";
    echo "<td>Nome do Produto</td>";
    echo "<td>Qtd. Em Estoque</td>";
    echo "<td>Valor Total em Estoque</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $estoque[0]['id'] . "</td>";
    echo "<td>" . $estoque[0]['nome'] . "</td>";
    echo "<td>" . $estoque[0]['qtd'] . "</td>";
    echo "<td> R$ " . $estoque[0]['preco'] * $estoque[4]['qtd'] . "</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $estoque[1]['id'] . "</td>";
    echo "<td>" . $estoque[1]['nome'] . "</td>";
    echo "<td>" . $estoque[1]['qtd'] . "</td>";
    echo "<td> R$ " . $estoque[1]['preco'] * $estoque[4]['qtd'] . "</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $estoque[2]['id'] . "</td>";
    echo "<td>" . $estoque[2]['nome'] . "</td>";
    echo "<td>" . $estoque[2]['qtd'] . "</td>";
    echo "<td> R$ " . $estoque[2]['preco'] * $estoque[4]['qtd'] . "</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $estoque[3]['id'] . "</td>";
    echo "<td>" . $estoque[3]['nome'] . "</td>";
    echo "<td>" . $estoque[3]['qtd'] . "</td>";
    echo "<td> R$ " . $estoque[3]['preco'] * $estoque[4]['qtd'] . "</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $estoque[4]['id'] . "</td>";
    echo "<td>" . $estoque[4]['nome'] . "</td>";
    echo "<td>" . $estoque[4]['qtd'] . "</td>";
    echo "<td> R$ " . $estoque[4]['preco'] * $estoque[4]['qtd'] . "</td>";
    echo "</tr>";
    echo "<tr align=center>";
    echo "<td>" . $estoque[5]['id'] . "</td>";
    echo "<td>" . $estoque[5]['nome'] . "</td>";
    echo "<td>" . $estoque[5]['qtd'] . "</td>";
    echo "<td> R$ " . $estoque[5]['preco'] * $estoque[4]['qtd'] . "</td>";
    echo "</tr>";
    echo "</table><br>";


?>
