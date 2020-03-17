<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
include_once("controller/ProdutoController.php");
use controller\ProdutoController as produto;
$prod = new produto;
if(isset($_GET['produto'])){
    $data = $prod->getProduto($_GET['produto']);
    if(count($data)!=1){
        $msg= 'Produto não encontrado';
    } else{
        $data=$data[0];
        $ret=$prod->deleteProduto($data->idProduto);
        $msg= $ret;
    }
} else {
    $msg= 'Produto não encontrado';
}
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Deletar Produto</h1>
    <a href="home.php?menu=produto&submenu=listar" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i>
        Voltar para a Lista
    </a>
</div>
<div class="row">
    <div class="col-12">
        <h3><?php echo $msg;?></h3>
</div>



