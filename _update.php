<?php
include_once("_conexao.php");
if ($_POST["tabela"] == 'tipo') {
     editaTipo($_POST["input_id"], $_POST["input_descricao"]);
     header("Location: /MedLife/admin/listaTipo.php");
} else if ($_POST["tabela"] == 'produtos') {
     editaProduto($_POST["input_id"], $_POST["input_nome"], $_POST["input_descricao"], $_POST["input_entrega"], $_POST["input_vencimento"], $_POST["input_tipo"], $_POST["input_fornecedor"]);
     header("Location: /MedLife/admin/listaProduto.php");
} else if ($_POST["tabela"] == 'fornecedor') {
     editaFornecedor($_POST["input_id"], $_POST["input_nome"], $_POST["input_telefone"], $_POST["input_estado"], $_POST["input_cidade"]);
     header("Location: /MedLife/admin/listaFornecedor.php");
}

function editaTipo($id, $descricao)
{
     $conexao = conectaBD();
     $sql = "UPDATE tipo SET descricao = '{$descricao}' WHERE  id = '{$id}'";
     mysqli_query($conexao, $sql) or die(mysqli_error());
     echo "Editado com Sucesso!";
     desconectaBD($conexao);
}

function editaProduto($id, $nome, $descricao, $entrega, $vencimento, $tipo, $fornecedor)
{
     $conexao = conectaBD();
     $sql = "UPDATE  produtos SET nome = '{$nome}', descricao = '{$descricao}', data_entrega= '{$entrega}', data_vencimento='{$vencimento}', id_tipo='{$tipo}', id_fornecedor='{$fornecedor}' WHERE  id = '{$id}'";
     mysqli_query($conexao, $sql) or die(mysqli_error());
     echo "Editado com Sucesso!";
     desconectaBD($conexao);
}

function editaFornecedor($id, $nome, $telefone, $estado, $cidade)
{
     $conexao = conectaBD();
     $sql = "UPDATE  fornecedor SET nome = '{$nome}', telefone = '{$telefone}', estado= UPPER('{$estado}'), cidade='{$cidade}'  WHERE  id = '{$id}'";
     mysqli_query($conexao, $sql) or die(mysqli_error());
     echo "Editado com Sucesso!";
     desconectaBD($conexao);
}