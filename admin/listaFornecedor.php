<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <title>MedLife - Fornecedores</title>
    </head>
    <body>
        <div id="cab">
            <div id="cab-home">
                <a href="index.html">Home</a>
            </div>
        </div>

        <a href="insereFornecedor.php"><button class="btn-insere">Inserir Fornecedor</button></a>
        <div id="tabela">
            <table>
                <thead>
                    <tr class="thead">
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Estado</th>
                        <th>Cidade</th>
                        <th colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once("../_conexao.php");
                        $conn = conectaBD();
                        $sql = "SELECT id, nome, telefone, estado, cidade FROM fornecedor";
                        $resultado = mysqli_query($conn, $sql);

                        while ($linha = mysqli_fetch_assoc($resultado)) {
                    ?>
                        <tr>
                            <td><?php echo $linha['id']; ?></td>
                            <td><?php echo $linha['nome']; ?></td>
                            <td><?php echo $linha['telefone']; ?></td>
                            <td><?php echo $linha['estado']; ?></td>
                            <td><?php echo $linha['cidade']; ?></td>
                            <td><a href="<?php echo "editaFornecedor.php?var_idfornecedor=" . $linha['id'] . "&var_nome=" . $linha['nome'] . "&var_telefone=" . $linha['telefone'] . "&var_estado=" . $linha['estado'] . "&var_cidade=" . $linha['cidade'] ?>">Alterar</a></td>
                            <td><a href="<?php echo "../_delete.php?var_idfornecedor=" . $linha['id'] . "&tabela=fornecedor" ?>">Excluir</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>