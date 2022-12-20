<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <title>Gerenciador de Tarefas</title>
</head>

<body>
    <h1>Gerenciador de Tarefas</h1>
    <form>
        <fieldset>
            <legend>Nova tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="nome" />
            </label>
            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>
    <?php
    if (isset($_GET['nome']) && $_GET['nome'] != "") {
        echo "Nome informado: " . $_GET['nome'];
    } elseif ($_GET['nome'] === "") {
        echo "Houve um erro, o nome não pode ser vazio!";
    }
    ?>
</body>

</html>