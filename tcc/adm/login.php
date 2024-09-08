<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
    echo "<h3>Sessão em PHP</h3>";
    echo "<form name='sessao' method='post' action=''>";
        echo "<p>";
            echo "<label for='nome'>Nome:</label>";
            echo "<input type='text' name='nome' maxlenght='40' required>";
        echo "</p>";
        echo "<p>";
            echo "<label for='email'>Email</label>";
            echo "<input type='text' name='email' maxlenght='70' required>";
        echo "</p>";
            echo "<input type='submit' name='enviar' value='Send'>";
    echo "</form>";
    if(isset($_POST["enviar"]))
    {
        //a partir do metodo post as variáveis vão receber esses valores
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        //salvando os dados agora, na sessão
        session_start();
        $_SESSION["nome"] = $nome;
        $_SESSION["email"] = $email;

        //echo "<marquee direction='up'>Dados salvos com sucesso</marquee>";
        echo "<p><a href='exibir.php'>Exibir</a>";
        echo "<a href='logout.php'> Sair</a></p>";
    }
    ?>
</body>
</html>