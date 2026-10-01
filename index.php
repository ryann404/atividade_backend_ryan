<?php

    include "config/conexao.php";

    $sql = "SELECT * FROM ordens_servico";

    $resultado = $conexao -> query($sql);
    // o resultado vai ser algo que a conexao vai CONSULTAR a variavel sql

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistência Técnica</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <div class="container">

        <h1 class="titulo">Ordens de Serviço</h1>
        <br>

        <a href="cadastrar.php" class="botao">Nova Ordem</a>

        <table>

            <tr>
            <!-- essa vai ser a linha principal -->
                <th>ID</th>
                <th>Cliente</th>
                <th>Equipamento</th>
                <th>Problemas</th>
                <th>Data</th>
                <th>Status</th>
                <!-- <th>Ações</th>   -->
                
            </tr>

            <?php while ($ordem = $resultado -> fetch_assoc()){ ?>
            <!-- enquanto estiver linha, ele vai jogar no $ordem, se nao tiver linha,
             ele vai ser False e o While acaba
            -->


            <!-- o fetch_assoc() passa linha por linha 
            ou seja, enquanto tiver linha pra ele passar, ele continua o loop-->
            <!-- enquanto houver uma proxima, continue -->
                <tr>

                    <td><?php echo $ordem["id"];?></td>
                    <td><?php echo $ordem["cliente"];?></td>
                    <td><?php echo $ordem["equipamento"];?></td>
                    <td><?php echo $ordem["problema"];?></td>
                    <td><?php echo $ordem["data_entrada"];?></td>
                    <td><?php echo $ordem["status"];?></td>
                    <td>
                        <a href='editar.php ? id=<?php echo $ordem["id"];?>' class="btnEditar">Editar</a>
                        <!-- ele vai acessar o PHP, buscar uma variavel e trazer pro HTML -->
                        <!-- ele passa um valor (da linha que ele está) pro editar.php  -->
                         <!-- tudo depois do "?" é valor que vai ser enviado -->
                        <!-- ou seja, se o valor é 5, ele passa a variavel "id = 5" pro "editar.php" -->
                    </td>
                    <!-- td = célula -->

                </tr>
                
            <?php } ?>
            <!-- a chave só precisa estar no mundo php pra estar certa -->
            <!-- ou seja, de inicio ela é php, o resto é em html e pra fechar, ela volta no php -->

        </table>

    </div>
</body>
</html>