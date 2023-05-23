<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <title>MedLife - Produtos</title>
    </head>
    <body>
        <div id="cab">
            <div id="cab-home">
                <a href="index.html">Home</a>
            </div>
        </div>

        <a href="insereProduto.php"><button class="btn-insere">Inserir Produto</button></a>
        <div id="tabela">
            <table>
                <thead>
                    <tr class="thead">
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Data da Entrega</th>
                        <th>Vencimento</th>
                        <th>Tipo</th>
                        <th>Fornecedor</th>
                        <th colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once("../_conexao.php"); #chama o arquivo
                        $conn = conectaBD();
                        $sql = "SELECT p.id, p.nome, p.descricao, p.data_entrega, p.data_vencimento, tp.descricao as tipo, f.nome as fornecedor FROM tipo tp inner join produtos p on tp.id = p.id_tipo inner join fornecedor f on p.id_fornecedor = f.id;";
                        $resultado = mysqli_query($conn, $sql);

                        while ($linha = mysqli_fetch_assoc($resultado)) {
                    ?>
                        <tr>
                            <td><?php echo $linha['id']; ?></td>
                            <td><?php echo $linha['nome']; ?></td>
                            <td><?php echo $linha['descricao']; ?></td>
                            <td><?php echo $linha['data_entrega']; ?></td>
                            <td><?php echo $linha['data_vencimento']; ?></td>
                            <td><?php echo $linha['tipo']; ?></td>
                            <td><?php echo $linha['fornecedor']; ?></td>
                            <td><a href="<?php echo "editaProduto.php?var_idproduto=" . $linha['id'] . "&var_nome=" . $linha['nome'] . "&var_descricao=" . $linha['descricao'] . "&var_entrega=" . $linha['data_entrega'] . "&var_vencimento=" . $linha['data_vencimento'] . "&var_tipo=" . $linha['tipo'] . "&var_fornecedor=" . $linha['fornecedor'] ?>">Alterar</a></td>
                            <td><a href="<?php echo "../_delete.php?var_idproduto=" . $linha['id'] . "&tabela=produtos" ?>">Excluir</a></td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>