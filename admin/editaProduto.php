<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <title>MedLife - Alterar Produto</title>
    </head>
    <body>
        <div id="cab">
            <div id="cab-home">
                <a href="index.html">Home</a>
            </div>
        </div>

        <form action="../_update.php" method="post">
            <b>Nome:</b> 
            <input type="text" name="input_nome" size="8" value="<?php echo $_GET['var_nome'] ?>">
            </br></br>

            <b>Descrição:</b> 
            <input type="textarea" name="input_descricao" size="30" value="<?php echo $_GET['var_descricao'] ?>">
            </br></br>

            <b>Data de Entrega:</b> 
            <input type="date" name="input_entrega" size="30" value="<?php echo $_GET['var_entrega'] ?>">
            </br></br>

            <b>Data de Vencimento:</b> 
            <input type="date" name="input_vencimento" size="30" value="<?php echo $_GET['var_vencimento'] ?>">
            </br></br>

            <b> Tipo:</b>
            <select name="input_tipo">
                <?php
                include_once("../_conexao.php");
                $conn = conectaBD();
                $sql = "SELECT id, descricao FROM tipo";
                $resultado = mysqli_query($conn, $sql);

                while ($linha = mysqli_fetch_assoc($resultado)) {
                ?>

                <option <?php echo $_GET['var_tipo'] == $linha['id'] ? 'selected' : '' ?>
                value="<?php echo $linha['id']; ?>"> <?php echo $linha['descricao'] ?></option>

                <?php } ?>
            </select>
            <br><br>

            <b> Fornecedor:</b>
            <select name="input_fornecedor">
                <?php
                include_once("../_conexao.php");
                $conn = conectaBD();
                $sql = "SELECT id, nome FROM fornecedor";
                $resultado = mysqli_query($conn, $sql);

                while ($linha = mysqli_fetch_assoc($resultado)) {
                ?>

                <option <?php echo $_GET['var_fornecedor'] == $linha['id'] ? 'selected' : '' ?>
                value="<?php echo $linha['id']; ?>"> <?php echo $linha['nome'] ?></option>

                <?php } ?>
            </select>
            <br><br>

            <input type="submit" value="Salvar">
            <a href="listaProduto.php" id="cancelar">Cancelar</a>
            <input type=hidden name="tabela" value="produtos">
            <input type=hidden name="input_id" value="<?php echo $_GET['var_idproduto'] ?>">

        </form>
    </body>
</html>