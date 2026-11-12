<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber dados de usuários</title>
</head>

<body>
    <?php
    $dados = file_get_contents("usuarios.json"); //Le usuarios cadastrados 
    $lista_usuarios = json_decode($dados, true); //Transforma os dados JSON em um array PHP
    
    $usuarios = [ //Reune os dados recebidos pelo formulario
        "nome" => $_POST['nome'],
        "ra" => $_POST['ra'],
        "sexo" => $_POST['sexo'],
        "idade" => $_POST['idade'],
        "endereco" => $_POST['endereco'],
        "telefone" => $_POST['telefone'],
        "email" => $_POST['email']
    ];

    $lista_usuarios[] = $usuarios; //Adiciona o novo usuario a lista
    file_put_contents("usuarios.json", json_encode($lista_usuarios)); //Transforma a lista em JSON e salva no arquivo
    header("Location: cadastro.php");
    exit;
    ?>

</body>

</html>