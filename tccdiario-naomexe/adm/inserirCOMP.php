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
    require "conexao.php";
    ?>
    <div id="cadastro">
        <h3>CADASTRO DE COMPONENTES</h3>
        <form name="cadastro" method="post" action="">
            <table>
                <tr>
                    <td><label for="NomeComp">Nome Componente:</label></td>
                    <td><input type="text" name="NomeComp" size="40" maxlength="50" placeholder="Informe o nome do componente" required>
                </tr>
                <tr>
                    <td><label for="DescricaoComp">Descrição:</label></td>
                    <td><input type="text" name="DescricaoComp" size="40" maxlength="250" placeholder="Informe a sua descrição" required>
                </tr>
                <tr>
                    <td><label for="CodeCompHtml">Code HTML:</label></td>
                    <td><input type="text" name="CodeCompHtml" size="40" maxlength="500" placeholder="Insira o código" required>
                </tr>
                <tr>
                    <td><label for="CodeCompCss">Code Css:</label></td>
                    <td><input type="text" name="CodeCompCss" size="40" maxlength="500" placeholder="Insira o código" required>
                </tr>
                <tr>
                    <td><label for="id_categoria">ID Categoria:</label></td>
                        <td>
                            <select id="id_categoria" name="id_categoria" required>
                                <?php
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['IDCategoria'] . "'>" . $row['IDCategoria'] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>Nenhuma categoria disponível</option>";
                                }
                                ?>
                            </select>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="cadastrar" value="cadastrar">
                    </td>
                </tr>

            </table>
        </form>
        <p align='center'><a href='home.php'>Voltar</a></p>
        <?php
        if (isset($_POST["cadastrar"])) {
            $NomeComp                = $_POST["NomeComp"];
            $DescricaoComp           = $_POST["DescricaoComp"];
            $CodeCompHtml            = $_POST["CodeCompHtml"];
            $CodeCompCss             = $_POST["CodeCompCss"];
            $id_categoria            = $_POST["id_categoria"];
            require "conexao.php";
            $sql = "INSERT INTO Componentes(IDComponente, NomeComp, DescricaoComp, CodeCompHtml, CodeCompCss, IDCategoria)";
            $sql .= " VALUES ('null', '$NomeComp', '$DescricaoComp', '$CodeCompHtml', '$CodeCompCss', '$id_categoria')";
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<script type =\"text/javascript\">alert('Componente cadastrado com sucesso!');</script>";
            echo "<p align='center'><a href='home.php'>Voltar</a></p>";
        }
        ?>
    </div>
</body>

</html>
