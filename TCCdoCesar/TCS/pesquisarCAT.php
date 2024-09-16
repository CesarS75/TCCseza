<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_menu.css">
    <title>Controle de Despesas - Pesquisas</title>
</head>
<body>
    <?php
        require "menu.php";

        echo "<h3>Listagem das Categorias</h3>";
        require "conexao.php";
        $sql = "SELECT * FROM Categorias ORDER BY IDCategoria";
        $resultado=mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        echo "<table border='1' width='1000' align='center'>";
            echo "<tr>";
                echo "<th width='100' align='center'>ID Categoria</th>";          
                echo "<th width='100' align='center'>Nome Categoria</th>";
                echo "<th width='250' align='center'>Descrição Categoria</th>";
            echo "</tr>";
    
            while ($linha=mysqli_fetch_array($resultado)) {
                $IDCategoria        = $linha["IDCategoria"];
                $NomeCat            = $linha["NomeCat"];
                $DescricaoCat       = $linha["DescricaoCat"];
    
                // Exibindo os dados

            echo "<tr>";
                echo "<td width='100' align='center'>$IDCategoria</td>";          
                echo "<td width='100' align='center'>$NomeCat</td>";
                echo "<td width='250' align='center'>$DescricaoCat</td>";
                echo "<td width='50'> <a href='editarCAT.php?IDCategoria=$IDCategoria'>Editar</td>";
            echo "</tr>";
            }

            echo "<p align='center'><a href='home.php'>Voltar</a></p>";

    ?>


</body>
</html>
