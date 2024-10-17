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
        require "conexao.php";

        echo "<h3>Edição cadastro de Componentes</h3>";
        $IDComponente = $_REQUEST['IDComponente']; // Recupera o código selecionado na pesquisa de clientes
        $sql = "SELECT * FROM Componentes WHERE IDComponente=$IDComponente";
        $resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

        $linha = mysqli_fetch_array($resultado);
        $NomeComp = $linha["NomeComp"];
        $DescricaoComp = $linha["DescricaoComp"];
        $CodeCompHtml = $linha["CodeCompHtml"];
        $CodeCompCss = $linha["CodeCompCss"];
        $id_categoria = $linha["IDCategoria"];

        echo "<form name=cadastro method=post action=''>";
            echo "<table align='center'>";
                echo "<tr>";
                    echo "<td><label for='NomeComp'>Nome Componente: </label>";
                    echo "<td><input type='text' name='NomeComp' value='$NomeComp' size='30' maxlength='50' required>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td><label for='DescricaoComp'>Descrição Componente: </label>";
                    echo "<td><input type='text' name='DescricaoComp' value='$DescricaoComp' size='30' maxlength='250' required>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td><label for='CodeCompHtml'>Código HTML: </label>";
                    echo "<td><input type='text' name='CodeCompHtml' value='$CodeCompHtml' size='30' maxlength='500' required>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td><label for='CodeCompCss'>Código CSS: </label>";
                    echo "<td><input type='text' name='CodeCompCss' value='$CodeCompCss' size='30' maxlength='500' required>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td><label for='id_categoria'>ID Categoria: </label>";
                    echo "<td>";
                        echo "<select id='id_categoria' name='id_categoria' required>";
                    
                            // Recupera as categorias do banco de dados
                            $sqlCategorias = "SELECT * FROM Categorias";
                            $resultCategorias = mysqli_query($conexao, $sqlCategorias) or die(mysqli_error($conexao));
                            
                            if (mysqli_num_rows($resultCategorias) > 0) {
                                while($row = mysqli_fetch_assoc($resultCategorias)) {
                                    $selected = $row['IDCategoria'] == $id_categoria ? 'selected' : '';
                                    echo "<option value='" . $row['IDCategoria'] . "' $selected>" . $row['IDCategoria'] . "</option>";
                                }
                            } else {
                                echo "<option value=''>Nenhuma categoria disponível</option>";
                            }
                    
                        echo "</select>";
                    echo "</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td colspan=2 align=center><input type='submit' name='salvar' value='Salvar'></td>";
                    echo "</tr>";
                echo "</table>";
        echo "</form>";

        if (isset($_POST['salvar'])) {
            $NomeComp = $_POST['NomeComp'];
            $DescricaoComp = $_POST['DescricaoComp'];
            $CodeCompHtml = $_POST['CodeCompHtml'];
            $CodeCompCss = $_POST['CodeCompCss'];
            $id_categoria = $_POST['id_categoria'];

            require "conexao.php";
            $sql = "UPDATE Componentes SET NomeComp='$NomeComp', DescricaoComp='$DescricaoComp', CodeCompHtml='$CodeCompHtml', CodeCompCss='$CodeCompCss', IDCategoria='$id_categoria' WHERE IDComponente=$IDComponente";
            mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

            echo "<script type='text/javascript'>alert('Componente atualizado com sucesso!');</script>";
            echo "<script>location.href='pesquisarCOMP.php?pesquisar=$id_categoria';</script>";
        }

        echo "<p align='center'><a href='home.php'>Voltar</a></p>";
    ?>
</body>
