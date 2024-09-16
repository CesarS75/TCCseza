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

        echo "<h3>Listagem dos Clientes</h3>";
        require "conexao.php";
        $sql = "SELECT * FROM clientes ORDER BY nome";
        $resultado=mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        echo "<table border='1' width='1000' align='center'>";
            echo "<tr>";
                echo "<th width='100' align='center'>Código</th>";
                echo "<th width='300' align='center'>Nome</th>";          
                echo "<th width='100' align='center'>CPF</th>";
                echo "<th width='250' align='center'>E-Mail</th>";
                echo "<th width='50' align='center'>Editar</th>";
            echo "</tr>";
    
            while ($linha=mysqli_fetch_array($resultado)) {
                $codigo = $linha["codigo"];
                $nome = $linha["nome"];
                $cpf = $linha["cpf"];
                $email = $linha["email"];
    
                // Exibindo os dados

            echo "<tr>";
                echo "<td width='100' align='center'>$codigo</td>";
                echo "<td width='300' align='center'>$nome</td>";          
                echo "<td width='100' align='center'>$cpf</td>";
                echo "<td width='250' align='center'>$email</td>";
                echo "<td width='50'> <a href='clientes_editar.php?codigo=$codigo'>Editar</td>";
            echo "</tr>";
            }
    ?>


</body>
</html>