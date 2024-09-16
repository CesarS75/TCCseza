<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Despesas</title>
    <link rel="stylesheet" href="estilos_menu.css">
    <link rel="stylesheet" href="estilos_formulario.css">
</head>

<body>
    <?php
    require "menu.php"; // Importa o menu do sistema de Controle de Despesas
    ?>
    <div id="cadastro">
        <h3>CADASTRO DE CATEGORIAS</h3>
        <form name="cadastro" method="post" action="">
            <table>
                <tr>
                    <td><label for="NomeCat">NomeCat:</label></td>
                    <td><input type="text" name="NomeCat" size="40" maxlength="50" placeholder="Informe o nome da categoria" required>
                </tr>
                <tr>
                    <td><label for="DescricaoCat">Descrição:</label></td>
                    <td><input type="text" name="DescricaoCat" size="40" maxlength="250" placeholder="Informe a sua descrição" required>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="cadastrar" value="cadastrar">
                    </td>
                </tr>
            </table>
        </form>
        <p align='center'><a href='home.php'>Voltar</a></p>;
        <?php
        if (isset($_POST["cadastrar"])) {
            $NomeCat                = $_POST["NomeCat"];
            $DescricaoCat           = $_POST["DescricaoCat"];
            require "conexao.php";
            $sql = "INSERT INTO Categorias(IDCategoria, NomeCat, DescricaoCat)";
            $sql .= " VALUES ('null', '$NomeCat', '$DescricaoCat')";
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<script type =\"text/javascript\">alert('Categoria cadastrada com sucesso!');</script>";
            echo "<p align='center'><a href='home.php'>Voltar</a></p>";
        }
        ?>
    </div>
</body>

</html>
