<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <title>MedLife - Inserir Tipo</title>
    </head>
    <body>
        <div id="cab">
            <div id="cab-home">
                <a href="index.html">Home</a>
            </div>
        </div>

        <form action="../_insert.php" method="post">
            <b>Descrição:</b> 
            <input type="textarea" name="input_descricao" size="30">
            </br></br>

            <b> Fornecedor:</b>
            <select name="input_fornecedor">
                <?php
                include_once("../_conexao.php");
                $conn = conectaBD();
                $sql = "SELECT id, nome FROM fornecedor";
                $resultado = mysqli_query($conn, $sql);

                while ($linha = mysqli_fetch_assoc($resultado)) {
                ?>

                <option value="<?php echo $linha['id']; ?>"> <?php echo $linha['nome'] ?></option>

                <?php } ?>
            </select>
            <br><br>
            
            <input type="submit" value="Salvar">
            <a href="listaTipo.php" id="cancelar">Cancelar</a>
            <input type=hidden name="tabela" value="tipo">

        </form>
    </body>
</html>