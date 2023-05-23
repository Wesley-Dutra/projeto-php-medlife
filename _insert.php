<?php
 include_once("_conexao.php");

 if ($_POST["tabela"] == 'tipo') {
     salvarTipo($_POST["input_descricao"]);
     header("Location: /MedLife/admin/listaTipo.php"); 
 } else if ($_POST["tabela"] == 'produtos') {
     salvarProduto($_POST["input_nome"], $_POST["input_descricao"], $_POST["input_entrega"], $_POST["input_vencimento"], $_POST["input_tipo"], $_POST["input_fornecedor"]);
     header("Location: /MedLife/admin/listaProduto.php"); 
} else if ($_POST["tabela"] == 'fornecedor') {
     salvarFornecedor($_POST["input_nome"], $_POST["input_telefone"], $_POST["input_estado"], $_POST["input_cidade"]);
     header("Location: /MedLife/admin/listaFornecedor.php");
}

function salvarTipo($descricao){
     $conexao = conectaBD();  
     $dados= "INSERT INTO tipo(descricao) VALUES ('{$descricao}')";
     mysqli_query($conexao,$dados) or die(mysqli_error());
     echo "Cadastro com Sucesso!";
     desconectaBD($conexao);
}

function salvarFornecedor($nome, $telefone, $estado, $cidade){
     $conexao = conectaBD();  
     $dados= "INSERT INTO fornecedor(nome, telefone, estado, cidade) VALUES ('{$nome}','{$telefone}', UPPER('{$estado}'), '{$cidade}')";
     mysqli_query($conexao,$dados) or die(mysqli_error());
     echo "Cadastro com Sucesso!";
     desconectaBD($conexao);
}

function salvarProduto($nome, $descricao, $entrega, $vencimento, $tipo, $fornecedor){
     $conexao = conectaBD();  
     $dados= "INSERT INTO produtos (nome, descricao, data_entrega, data_vencimento, id_tipo, id_fornecedor) VALUES ('{$nome}','{$descricao}', '{$entrega}', '{$vencimento}', '{$tipo}', '{$fornecedor}')";
     mysqli_query($conexao,$dados) or die(mysqli_error());
     echo "Cadastro com Sucesso!";
     desconectaBD($conexao);
}