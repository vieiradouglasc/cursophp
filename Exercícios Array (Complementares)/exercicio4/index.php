<?php
    $agenda = [
        '2024-06-24' => ["hora" => "10:30", "titulo" => "Daily", "local" => "Microsoft Teams", "obs" => "Atualizar Lista de Tarefas"],
        '2024-06-25' => ["hora" => "11:45", "titulo" => "Levanamento de Requisitos", "local" => "Sala de Reunião", "obs" => "Gravar Reunião"],
        '2024-06-26' => ["hora" => "14:30", "titulo" => "Status Report", "local" => "Microsoft Teams", "obs" => "Apresentar PPT de evolução do Projeto"],
        '2024-06-27' => ["hora" => "16:00", "titulo" => "Levantamento de Horas", "local" => "Sala de Reunião", "obs" => "Apresentar Levantamento de Requisitos"],
    ];    
?>

<html>
    <head>
        <title>Exercício 4 - Array</title>
    </head>
    <body>
        <h1>Agenda Semanal</h1>
        <table border="1">
            <tr>
                <td>Data do Compromisso:</td>
                <td><?php echo date('j F, Y', strtotime(array_keys($agenda)[0]));?></td>
            </tr>
            <tr>
                <td>Hora do Compromisso:</td>
                <td><?php echo $agenda['2024-06-24']["hora"];?></td>
            </tr>
            <tr>
                <td>Título do Compromisso:</td>
                <td><?php echo $agenda['2024-06-24']["titulo"];?></td>
            </tr>
            <tr>
                <td>Local do Compromisso:</td>
                <td><?php echo $agenda['2024-06-24']["local"];?></td>
            </tr>
            <tr>
                <td>Observação do Compromisso:</td>
                <td><?php echo $agenda['2024-06-24']["obs"];?></td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr>
                <td>Data do Compromisso:</td>
                <td><?php echo date('j F, Y', strtotime(array_keys($agenda)[1]));?></td>
            </tr>
            <tr>
                <td>Hora do Compromisso:</td>
                <td><?php echo $agenda['2024-06-25']["hora"];?></td>
            </tr>
            <tr>
                <td>Título do Compromisso:</td>
                <td><?php echo $agenda['2024-06-25']["titulo"];?></td>
            </tr>
            <tr>
                <td>Local do Compromisso:</td>
                <td><?php echo $agenda['2024-06-25']["local"];?></td>
            </tr>
            <tr>
                <td>Observação do Compromisso:</td>
                <td><?php echo $agenda['2024-06-25']["obs"];?></td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr>
                <td>Data do Compromisso:</td>
                <td><?php echo date('j F, Y', strtotime(array_keys($agenda)[2]));?></td>
            </tr>
            <tr>
                <td>Hora do Compromisso:</td>
                <td><?php echo $agenda['2024-06-26']["hora"];?></td>
            </tr>
            <tr>
                <td>Título do Compromisso:</td>
                <td><?php echo $agenda['2024-06-26']["titulo"];?></td>
            </tr>
            <tr>
                <td>Local do Compromisso:</td>
                <td><?php echo $agenda['2024-06-26']["local"];?></td>
            </tr>
            <tr>
                <td>Observação do Compromisso:</td>
                <td><?php echo $agenda['2024-06-26']["obs"];?></td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr>
                <td>Data do Compromisso:</td>
                <td><?php echo date('j F, Y', strtotime(array_keys($agenda)[3]));?></td>
            </tr>
            <tr>
                <td>Hora do Compromisso:</td>
                <td><?php echo $agenda['2024-06-27']["hora"];?></td>
            </tr>
            <tr>
                <td>Título do Compromisso:</td>
                <td><?php echo $agenda['2024-06-27']["titulo"];?></td>
            </tr>
            <tr>
                <td>Local do Compromisso:</td>
                <td><?php echo $agenda['2024-06-27']["local"];?></td>
            </tr>
            <tr>
                <td>Observação do Compromisso:</td>
                <td><?php echo $agenda['2024-06-27']["obs"];?></td>
            </tr>
        </table>
    </body>
</html>