<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de usuários</title>
</head>

<body>
    <div class="menu">
        <h1>
            Cadastro de usuários
        </h1>

        <a href="exibe_dados.php">Usuários Cadastrados</a>
        <a href="cadastro.php">Cadastrar Usuário</a>
    </div>

    <div>
        <form action="recebe_dados.php" method="POST">
            Nome: <input type="text" name="nome" required>
            RA: <input type="text" name="ra" required>
            Sexo: <select name="sexo">
                <option value="Feminino"> Feminino </option>
                <option value="Masculino"> Masculino </option>
                <option value="Outro"> Outro </option>
            </select>
            Idade: <input type="number" name="idade" required>
            Endereço: <input type="text" name="endereco" required>
            Telefone: <input type="tel" name="telefone" required>
            E-mail: <input type="email" name="email" required>
            <input type="submit" value="Cadastrar Usuário">
        </form>
    </div>

</body>

</html>