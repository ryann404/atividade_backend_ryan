<?php

    $host = "localhost";
    // o host vai ser o local

    $usuario = "root";
    // o usuario q usei la no PHPMyAdmin

    $senha = "mysql";
    // a senha que usamos pra entrar

    $banco = "assistencia_tecnica";
    // selecionando o banco de dados que vamos entrar

    $porta = "3306";
    // usando a porta pra logar

    // resumindo, precisa saber onde vai ser o servidor (local)
    // qual o usuario e a senha pra logar e qual o nome do banco em questao
    // e qual a porta que precisa pra logar

    $conexao = new mysqli(
    // selecionando o tipo da conexao e o que vai ter nela
        $host,
        $usuario,
        $senha,
        $banco,
        $porta
    );
    if ($conexao -> connect_error) {
        die("Erro ao conectar: " . $conexao->connect_error);
    }
?>