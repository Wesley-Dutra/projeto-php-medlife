<?php
 include_once("_conexao.php");

 if($_GET['tabela'] == 'tipo'){
    excluirTipo($_GET['var_idtipo']);
    header("Location: /MedLife/admin/listaTipo.php"); 
 } else if($_GET['tabela'] == 'produtos'){
   excluirProduto($_GET['var_idproduto']);
   header("Location: /MedLife/admin/listaProduto.php"); 
 } else if($_GET['tabela'] == 'fornecedor'){
   excluirFornecedor($_GET['var_idfornecedor']);
   header("Location: /MedLife/admin/listaFornecedor.php"); 
 }

function excluirTipo($id_tipo){
   $conexao = conectaBD();  
   $dados= "DELETE FROM tipo 
            WHERE  id = '{$id_tipo}'";
   mysqli_query($conexao,$dados) or die(mysqli_error());
   $dados= "DELETE FROM produtos
            WHERE  id_tipo = '{$id_tipo}'";
   mysqli_query($conexao,$dados) or die(mysqli_error());
   echo "Excluído com Sucesso!";
   desconectaBD($conexao);
}

function excluirFornecedor($id_fornecedor){
   $conexao = conectaBD();  
   $dados= "DELETE FROM fornecedor
            WHERE  id = '{$id_fornecedor}'";
   mysqli_query($conexao,$dados) or die(mysqli_error());
   $dados= "DELETE FROM produtos
            WHERE  id_fornecedor = '{$id_fornecedor}'";
   mysqli_query($conexao,$dados) or die(mysqli_error());
   echo "Excluído com Sucesso!";
   desconectaBD($conexao);
}

function excluirProduto($id_produto){
   $conexao = conectaBD();  
   $dados= "DELETE FROM produtos
            WHERE  id = '{$id_produto}'";
   mysqli_query($conexao,$dados) or die(mysqli_error());
   echo "Excluído com Sucesso!";
   desconectaBD($conexao);
}
