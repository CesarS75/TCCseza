<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_menu.css">
    <title>Controle de Despesas - Editar</title>
</head>

<body>
    <?php
        require "menu.php";
        echo "<h3>Editar Cadastro de Categorias</h3>";
        require "conexao.php";
        $IDCategoria = $_REQUEST["IDCategoria"]; //recupera o código selecionado na pesquisa de clientes
        $sql="SELECT * FROM Categorias WHERE IDCategoria='$IDCategoria'";

        $resultado=mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

        $linha=mysqli_fetch_array($resultado);
        $NomeCat            = $linha["NomeCat"];
        $DescricaoCat       = $linha["DescricaoCat"];

        echo "<form name='cadastro' method='post' action=''>";
            echo "<table align='center'>";

                echo "<tr>";
                    echo "<td> <label for='NomeCat'>Nome Categoria: </label>";
                    echo "<td> <input type='text' name='NomeCat' value='$NomeCat' size='30' maxlength='50' required>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td> <label for='DescricaoCat'>Descrição Categoria: </label>";
                    echo "<td> <input type='text' name='DescricaoCat' value='$DescricaoCat' size='14' maxlength='250' required>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td colspan='2' align='center'> <input type='submit' name='salvar' value='Salvar'></td>";
                echo "</tr>";
            echo "</table>";
        echo "</form>";
        if(isset($_POST["salvar"]))
        {
        $NomeCat        = $_POST["NomeCat"];
        $DescricaoCat   = $_POST["DescricaoCat"];
        require "conexao.php";
        $sql="UPDATE Categorias SET NomeCat='$NomeCat', DescricaoCat='$DescricaoCat' WHERE IDCategoria='$IDCategoria'";
        mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

        echo "<script type =\"text/javascript\">alert('Categoria alterada com sucesso!');</script>";
            echo "<p align='center'><a href='pesquisarCAT.php'>Pesquisar mais</a></p>";
        }

        echo "<p align='center'><a href='home.php'>Voltar</a></p>";

    ?>
</body>
</html>