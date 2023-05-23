<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <title>MedLife - Alterar Fornecedor</title>
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

            <b>Telefone:</b> 
            <input type="text" name="input_telefone" size="30" value="<?php echo $_GET['var_telefone'] ?>">
            </br></br>

            <b>Estado:</b> 
            <input type="text" name="input_estado" size="30" maxlenght="2" style="text-transform: uppercase;"  value="<?php echo $_GET['var_estado'] ?>">
            </br></br>

            <b>Cidade:</b> 
            <input type="text" name="input_cidade" size="30" value="<?php echo $_GET['var_cidade'] ?>">
            </br></br>

            <input type="submit" value="Salvar">
            <a href="listaFornecedor.php" id="cancelar">Cancelar</a>
            <input type=hidden name="tabela" value="fornecedor">
            <input type=hidden name="input_id" value="<?php echo $_GET['var_idfornecedor'] ?>">

        </form>
    </body>
</html>