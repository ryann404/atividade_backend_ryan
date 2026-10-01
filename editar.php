<?php

        
    include "config/conexao.php";

    $id = intval($_GET["id"]);
    // PRECISA DE UM GET PRA ALTERAR UM VALOR...
    // intcal basicamente converte qualquer valor pra inteiro e passa pra variavel id
    // nesse caso n precisa pq ja é int, mas vai que o banco de dados tem varchar ne..
    // se o id foi 5, ele vai pegar 5..

    $sql = "SELECT * FROM ordens_servico WHERE 
    id = ?";

    $stmt = $conexao->prepare($sql);
    // vai preparar pra colocar o parametro la no sql

    $stmt -> bind_param("i", $id);
    // agr vai repor o paranaue o tipo INT

    $stmt -> execute();
    // executa o paranaue

    $resultado = $stmt->get_result();
    // resultado vai ser o resultado do paranaue

    $ordem = $resultado -> fetch_assoc()
    // vai puxar todos os dados pra poder editar

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ordem</title>
    <link rel="stylesheet" href="estilo/estilo.css">

</head>
<body>

    <div class="container">
        
    <h1>Editar Ordem de Serviço</h1>
        <form action="atualizar.php" method="POST">
            
        <input 
        type="hidden" 
        name="id" 
        value="<?php echo $ordem["id"]; ?>">


        <label>Cliente</label>
        <input 
        type="text" 
        name="cliente" 
        value="<?php echo htmlspecialchars($ordem["cliente"]); ?>" 
        required>
        
        <label>Equipamentos</label>
        <input 
        type="text" 
        name="equipamento"
        value="<?php echo htmlspecialchars($ordem["equipamento"]); ?>"
        required>
         <!--ele só ta buscando as paradas do value dentro do php  -->

        <label>Problemas</label>
        <textarea name="problema" required>
            <?php echo htmlspecialchars($ordem["problema"]);?>
        </textarea>
        
        <label>Data de Entrada</label>
        <input type="date"
        name="data_entrada"
        value="<?php echo $ordem["data_entrada"]; ?>" 
        required>
        <!-- nao coloca parenteses pq é data  -->
        </form>

        <label>Status</label>
        
        <select name="status">
        
            <option value="Recebido">Recebido</option>
            <option value="Em análise">Em análise</option>
            <option value="Em manutenção">Em manutenção</option>
            <option value="concluído">concluído</option>
        
        </select>

        <button type="submit">Atualizar</button>

    </div>

</body>
</html>