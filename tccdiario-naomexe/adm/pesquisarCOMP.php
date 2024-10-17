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

        echo "<h3>Listagem das Componentes</h3>";
        require "conexao.php";
        $sql = "SELECT * FROM Componentes ORDER BY IDComponente";
        $resultado=mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        echo "<table border='1' width='1000' align='center'>";
            echo "<tr>";
                echo "<th width='20'  align='center'>ID Componente</th>";          
                echo "<th width='100' align='center'>Nome Componente</th>";
                echo "<th width='250' align='center'>Descrição Componente</th>";
                echo "<th width='250' align='center'>Código HTML</th>";
                echo "<th width='250' align='center'>Código CSS</th>";
                echo "<th width='250' align='center'>ID Categoria Main</th>";


            echo "</tr>";
    
            while ($linha=mysqli_fetch_array($resultado)) {
                $IDComponente         = $linha["IDComponente"];
                $NomeComp             = $linha["NomeComp"];
                $DescricaoComp        = $linha["DescricaoComp"];
                $CodeCompHtml         = $linha["CodeCompHtml"];
                $CodeCompCss          = $linha["CodeCompCss"];
                $IDCategoria          = $linha["IDCategoria"];
    
    
                // Exibindo os dados

            echo "<tr>";
                echo "<td width='20' align='center'>$IDComponente</td>";          
                echo "<td width='100' align='center'>$NomeComp</td>";
                echo "<td width='250' align='center'>$DescricaoComp</td>";
                echo "<td width='250' align='center'>$CodeCompHtml</td>";
                echo "<td width='250' align='center'>$CodeCompCss</td>";
                echo "<td width='250' align='center'>$IDCategoria</td>";


                echo "<td width='50'> <a href='editarComp.php?IDComponente=$IDComponente'>Editar</td>";
            echo "</tr>";
            }

            echo "<p align='center'><a href='home.php'>Voltar</a></p>";

    ?>


</body>
</html>
