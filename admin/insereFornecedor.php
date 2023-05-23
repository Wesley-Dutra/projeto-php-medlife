<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <title>MedLife - Inserir Fornecedor</title>
    </head>
    <body>
        <div id="cab">
            <div id="cab-home">
                <a href="index.html">Home</a>
            </div>
        </div>

        <form action="../_insert.php" method="post">
            <b>Nome:</b> 
            <input type="text" name="input_nome" size="30">
            </br></br>

            <b>Telefone:</b> 
            <input type="text" name="input_telefone" size="30"?>
            </br></br>

            <b>Estado:</b> 
            <input type="text" name="input_estado" size="30" maxlenght="2" style="text-transform: uppercase;">
            </br></br>

            <b>Cidade:</b> 
            <input type="text" name="input_cidade" size="30">
            </br></br>

            <input type="submit" value="Salvar">
            <a href="listaFornecedor.php" id="cancelar">Cancelar</a>
            <input type=hidden name="tabela" value="fornecedor">
        </form>
    </body>
</html>