<?php

    include "config/conexao.php";
    // jogando todas as configurações de conexao pra ca
    // POST é uma variavel especial no php que recebe dados enviados
    // pelo formulario quando digitamos o method="POST" no html

    $cliente = $_POST["cliente"];
    
    $equipamento = $_POST["equipamento"];
    
    $problema = $_POST["problema"];
    
    $data_entrada = $_POST["data_entrada"];
    
    $status = $_POST["status"];

    // usando metodo post e puxando as informações usando o NAME dentro dos inputs
    // pra ligar e oegar as informacoes

    $sql = "INSERT INTO ordens_servico
        (cliente, equipamento, problema, data_entrada, status)
        VALUES (?, ?, ?, ?, ?)";
        // ponto de interrogação é pra SEPARAR UM ESPAÇo
        // e nao precisa de ID pq ele ja ta com autoincrement

    $stmt = $conexao -> prepare($sql);
    // stmt vem de Statement (declaração)
    // 
    
    $stmt -> bind_param(
        // reduz a quantidade de sql injection
        "sssss",
        // 5 letra "s" = 5 strings

        $cliente,
        $equipamento,
        $problema,
        $data_entrada,
        $status
    );
    // aqui é basicamente um "preenche aquela parada que vc reservou (com ponto de interrgoação)"
    // usando isso

    if ($stmt -> execute()){
    // se o estado for "executando"...

    header("Location: index.php");
        exit;

    } else{
        echo "Erro ao cadastrar ordens de serviço.";
    }

?>