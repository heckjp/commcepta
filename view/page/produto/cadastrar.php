<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
include_once("controller/ProdutoController.php");
use controller\ProdutoController as produto;
$prod = new produto;
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cadastrar Produto</h1>
    <a href="home.php?menu=produto&submenu=listar" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i>
        Voltar para a Lista
    </a>
</div>
<div class="row">
    <div class="col-12">
   
        <!-- Formulário de cadastro-->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form class="form" method="POST" action="">
                    <div class="form-group">
                        <label for="login">Nome</label>
                        <input type="text" name="nome" id="nome">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea id="descricao" name="descricao"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="senha">Valor</label>
                        <input type="text" name="valor" id="valor">
                    </div>
                    <div class="form-group">
                        <label for="codig_barra">Código de Barras</label>
                        <input type="text" name="codigo_barra" id="codigo_barra">
                    </div>
                        <input type="submit" class="btn btn-primary" value="Cadastrar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    if($_POST){
        $ret=$prod->insertProduto($_POST);
        echo $ret;
    }
?>


