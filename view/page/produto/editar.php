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
        header('Location:home.php?menu=produto&submenu=listar');
    }
} else {
    header('Location:home.php?menu=produto&submenu=listar');
}
$data=$data[0];


?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Editar Usuário</h1>
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
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" value="<?php echo $data->nome;?>">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea name="descricao" id="descricao"><?php echo $data->descricao; ?>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor</label>
                        <input type="text" name="valor" id="valor" value="<?php echo $data->valor;?>">
                    </div>
                    <div class="form-group">
                        <label for="codigo_barra">Código de Barras</label>
                        <input type="text" name="codigo_barra" id="codigo_barra" value="<?php echo $data->codigo_barra;?>">
                    </div>
                        <input type="hidden" value="<?php echo $data->idProduto;?>" name="idProduto" id="idProduto">
                        <input type="submit" class="btn btn-primary" value="Editar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    if($_POST){
        $ret=$prod->editProduto($_POST);
        echo $ret;
    }
?>


