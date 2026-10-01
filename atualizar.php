<?php
    
    include "config/conexao.php";
    // pegando o conteudo de um arquivo e jogando pra esse (configurando a conexao)

    $id = intval($_POST);
    // intval = passa string pra int

    $cliente = $_POST["cliente"];
    $equipamento = $_POST["equipamento"];
    $problema = $_POST["problema"];
    $data_entrada = $_POST["data_entrada"];
    $status = $_POST["status"];

    $sql = "UPDATE ordens_servico 
        -- atualizar um dado
    
    SET cliente = ?,
        equipamento = ?,
        problema = ?,
        data_entrada = ?,
        status = ?
    WHERE id = ?";

    // reservando espaços
    
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

        if ($stmt -> execute()){
            header("Location: index.php");
            // atualiza os dados, recarrega a pagina e envia os dados
            exit;
        } else{
            echo "Erro ao atualizar.";
        }
        // date é string tbm
?>