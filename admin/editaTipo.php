<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <title>MedLife - Alterar Tipo</title>
    </head>
    <body>
        <div id="cab">
            <div id="cab-home">
                <a href="index.html">Home</a>
            </div>
        </div>

        <form action="../_update.php" method="post">
            <b>Descrição:</b> 
            <input type="textarea" name="input_descricao" size="30" value="<?php echo $_GET['var_descricao'] ?>">
            </br></br>

            <input type="submit" value="Salvar">
            <a href="listaTipo.php" id="cancelar">Cancelar</a>
            <input type=hidden name="tabela" value="tipo">
            <input type=hidden name="input_id" value="<?php echo $_GET['var_idtipo'] ?>">

        </form>
    </body>
</html>