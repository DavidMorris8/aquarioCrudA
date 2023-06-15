<?php 

require_once '../modelo/vendasClasse.php';
$objVendas = new Vendas();

if(isset($_POST['insert'])) {
    $idCliente = $_POST['txtIdCliente'];
    $idProduto = $_POST['txtIdProduto'];
    $diaVenda = $_POST['txtDiaVenda'];
    $quantidade = $_POST['txtQuantidade'];
    if($objVendas->insert($idCliente, $idProduto, $diaVenda, $quantidade)) {
        $objVendas->redirect('../vendas.php');
    }
}

if(isset($_POST['editar'])) {
    $idCliente = $_POST['txtIdCliente'];
    $idProduto = $_POST['txtIdProduto'];
    $diaVenda = $_POST['txtDiaVenda'];
    $quantidade = $_POST['txtQuantidade'];
    $id = $_POST['txtId'];
    if($objVendas->editar($idCliente, $idProduto, $diaVenda, $quantidade ,$id)) {
        $objVendas->redirect('../vendas.php');
    }
}

if(isset($_POST['delete'])) {
    $id = $_POST['txtId'];
    if($objVendas->deletar($id)) {
        $objVendas->redirect('../vendas.php');
    }
}