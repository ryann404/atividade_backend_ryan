<?php
    
    include "config/conexao.php";
    // pegando o conteudo de um arquivo e jogando pra esse (configurando a conexao)

    $id = intval($_POST["id"]);
    $cliente = $_POST["cliente"];
    $equipamento = $_POST["equipamento"];
    $problema = $_POST["problema"];
    $data_entrada = $_POST["data_entrada"];
    $status = $_POST["status"];

    $sql = "UPDATE ordens_servico
            SET cliente = ?,
                equipamento = ?,
                problema = ?,
                data_entrada = ?,
                status = ?
            WHERE id = ?";

    $stmt = $conexao -> prepare($sql);

    $stmt -> bind_param(
        "sssssi",
        $cliente,
        $equipamento,
        $problema,
        $data_entrada,
        $status,
        $id
    );

    if ($stmt->execute()){
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao atualizar.";
    }    
?>