<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Ordem de Serviço</title>
</head>
<body>
    <div class="container">
        <h1>Nova Ordem de Serviço</h1>
        <form action="salvar.php" method="POST">
        <!-- vou botar o arquivo do php aqui pra ele jogar la -->
         <br>

            <label>Cliente</label>
            <input type="text" name="cliente" required placeholder="Digite o nome">
            <!-- vai lançar um $_post["cliente"] -->
            <br>

            <label>Equipamento</label>
            <input type="text" name="equipamento" required placeholder="Digite o equipamento">
            <br>

            
            <label>Problema Apresentado</label>
            <textarea name="problema" required placeholder="Digite o problema apresentado"></textarea>
            <!-- textarea é uma area pra digitar texto, mas maior que o input:text -->
            <br>


            <label>Data de Entrada</label>
            <input type="date" name="data_entrada" required>
            <br> <br>


            <label>Status</label>
            <select name="status">
                <option value="Recebido">Recebido</option>
                <option value="Em análise">Em análise</option>
                <option value="Em manutenção">Em manutenção</option>
                <option value="Concluído">Concluído</option>
            </select>

            <button type="submit">Cadastrar ordem</button>

        </form>
        <br>
        <a href="index.php">Voltar</a>
    </div>    
</body>
</html>