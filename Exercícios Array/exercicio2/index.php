<?php
    $estoque = [
        ['id'=>1, 'nome'=>"Panela de Pressão 5L", 'qtd'=>12, 'preco'=>129.98],
        ['id'=>2, 'nome'=>"Jogo de Panela 5 pçs", 'qtd'=>8, 'preco'=>339.99],
        ['id'=>3, 'nome'=>"Liquidificador", 'qtd'=>5, 'preco'=>89.89],
        ['id'=>4, 'nome'=>"Batedeira", 'qtd'=>10, 'preco'=>119.99],
        ['id'=>5, 'nome'=>"Conjunto de Talheres", 'qtd'=>25, 'preco'=>49.99],
        ['id'=>6, 'nome'=>"Jogo de Prato 6 pçs", 'qtd'=>3, 'preco'=>235.99]  
    ];

    $idUsuario = rand(0, 8);
    $retornoUsuario = array_search($idUsuario, array_column($estoque, 'id'));
?>

<html>
    <head>
        <title>Exercício 2 - Array</title>
    </head>
    <body>
        <table border=1>
            <tr align="center">
                <td colspan="4">Controle de Estoque</td>
            </tr>
            <tr align="center">
                <td>ID do Produto</td>
                <td>Nome do Produto</td>
                <td>Qtd. em Estoque</td>
                <td>Preço Unitário</td>
            </tr>
            <tr align="center">
                <td><?php echo $estoque[0]['id']; ?></td>
                <td><?php echo $estoque[0]['nome']; ?></td>
                <td><?php echo $estoque[0]['qtd']; ?></td>
                <td><?php echo "R$ " . $estoque[0]['preco']; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $estoque[1]['id']; ?></td>
                <td><?php echo $estoque[1]['nome']; ?></td>
                <td><?php echo $estoque[1]['qtd']; ?></td>
                <td><?php echo "R$ " . $estoque[1]['preco']; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $estoque[2]['id']; ?></td>
                <td><?php echo $estoque[2]['nome']; ?></td>
                <td><?php echo $estoque[2]['qtd']; ?></td>
                <td><?php echo "R$ " . $estoque[2]['preco']; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $estoque[3]['id']; ?></td>
                <td><?php echo $estoque[3]['nome']; ?></td>
                <td><?php echo $estoque[3]['qtd']; ?></td>
                <td><?php echo "R$ " . $estoque[3]['preco']; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $estoque[4]['id']; ?></td>
                <td><?php echo $estoque[4]['nome']; ?></td>
                <td><?php echo $estoque[4]['qtd']; ?></td>
                <td><?php echo "R$ " . $estoque[4]['preco']; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $estoque[5]['id']; ?></td>
                <td><?php echo $estoque[5]['nome']; ?></td>
                <td><?php echo $estoque[5]['qtd']; ?></td>
                <td><?php echo "R$ " . $estoque[5]['preco']; ?></td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr align="center">
                <td colspan="2">Insira o ID do Produto</td>
            </tr>
            <tr align="center">
                <td>ID do Produto</td>
                <td><?php echo $idUsuario; ?></td>
            </tr>
        </table>
        <br>
        <?php
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
                    echo "<td>" . "R$ " . $estoque[$retornoUsuario]['preco'] . "</td>";
                    echo "</tr>";
                    echo "</table><br>";
                } else {
                    echo "<table border=1>";
                    echo "<tr>";
                    echo "<td colspan=4>Produto Não Encontrado</td>";
                    echo "</tr>";
                    echo "</table><br>";
                };
        ?>
                <table border=1>
            <tr align="center">
                <td colspan="4">Controle de Estoque</td>
            </tr>
            <tr align="center">
                <td>ID do Produto</td>
                <td>Nome do Produto</td>
                <td>Qtd. em Estoque</td>
                <td>Preço Unitário</td>
            </tr>
            <tr align="center">
                <td><?php echo $estoque[0]['id']; ?></td>
                <td><?php echo $estoque[0]['nome']; ?></td>
                <td><?php echo $estoque[0]['qtd']; ?></td>
                <td><?php echo "R$ " . $estoque[0]['preco'] * $estoque[0]['qtd']; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $estoque[1]['id']; ?></td>
                <td><?php echo $estoque[1]['nome']; ?></td>
                <td><?php echo $estoque[1]['qtd']; ?></td>
                <td><?php echo "R$ " . $estoque[1]['preco'] * $estoque[1]['qtd']; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $estoque[2]['id']; ?></td>
                <td><?php echo $estoque[2]['nome']; ?></td>
                <td><?php echo $estoque[2]['qtd']; ?></td>
                <td><?php echo "R$ " . $estoque[2]['preco'] * $estoque[2]['qtd']; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $estoque[3]['id']; ?></td>
                <td><?php echo $estoque[3]['nome']; ?></td>
                <td><?php echo $estoque[3]['qtd']; ?></td>
                <td><?php echo "R$ " . $estoque[3]['preco'] * $estoque[3]['qtd']; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $estoque[4]['id']; ?></td>
                <td><?php echo $estoque[4]['nome']; ?></td>
                <td><?php echo $estoque[4]['qtd']; ?></td>
                <td><?php echo "R$ " . $estoque[4]['preco'] * $estoque[4]['qtd']; ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $estoque[5]['id']; ?></td>
                <td><?php echo $estoque[5]['nome']; ?></td>
                <td><?php echo $estoque[5]['qtd']; ?></td>
                <td><?php echo "R$ " . $estoque[5]['preco'] * $estoque[5]['qtd']; ?></td>
            </tr>
        </table>
    </body>
</html>
    

    

