<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exibir dados de usuários</title>
</head>

<body class="dados">
    <div class="menu">
        <h1> Dados dos usuários </h1>
        <a href="exibe_dados.php">Usuários Cadastrados</a>
        <a href="cadastro.php">Cadastrar Usuário</a>
    </div>

    <?php
    $dados = file_get_contents("usuarios.json");
    $lista_usuarios = json_decode($dados, true);

    usort($lista_usuarios, function ($a, $b) {
        return (int) $a["ra"] <=> (int) $b["ra"];
    });

    foreach ($lista_usuarios as $usuario) {
        echo '<div class="usuario">';
        echo "<p> <strong>Nome: </strong>" . $usuario["nome"] . "</p>";
        echo "<p> <strong>RA: </strong>" . $usuario["ra"] . "</p>";
        echo "<p> <strong>Sexo: </strong>" . $usuario["sexo"] . "</p>";
        echo "<p> <strong>Idade: </strong>" . $usuario["idade"] . "</p>";
        echo "<p> <strong>Endereço: </strong>" . $usuario["endereco"] . "</p>";
        echo "<p> <strong>Telefone: </strong>" . $usuario["telefone"] . "</p>";
        echo "<p> <strong>E-mail: </strong>" . $usuario["email"] . "</p>";

        echo '</div>';

    }
    ?>
</body>

</html>