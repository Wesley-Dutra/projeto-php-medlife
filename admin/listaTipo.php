<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <title>MedLife - Tipos de Produtos</title>
    </head>
    <body>
        <div id="cab">
            <div id="cab-home">
                <a href="index.html">Home</a>
            </div>
        </div>

        <a href="insereTipo.php"><button class="btn-insere">Inserir Tipo</button></a>
        <div id="tabela">
            <table>
                <thead>
                    <tr class="thead">
                        <th>Código</th>
                        <th>Descrição</th>
                        <th colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once("../_conexao.php"); #chama o arquivo
                        $conn = conectaBD();
                        $sql = "SELECT id, descricao FROM tipo";
                        $resultado = mysqli_query($conn, $sql);

                        while ($linha = mysqli_fetch_assoc($resultado)) {
                    ?>
                        <tr>
                            <td><?php echo $linha['id']; ?></td>
                            <td><?php echo $linha['descricao']; ?></td>
                            <td><a href="<?php echo "editatipo.php?var_idtipo=" . $linha['id'] . "&var_descricao=" . $linha['descricao']?>">Alterar</a></td>
                            <td><a href="<?php echo "../_delete.php?var_idtipo=" . $linha['id'] . "&tabela=tipo" ?>">Excluir</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>