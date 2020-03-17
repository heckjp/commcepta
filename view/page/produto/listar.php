<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
include_once("controller/ProdutoController.php");
use controller\ProdutoController as produto;
$usr = new produto;
$produtos=json_decode($usr->list());
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Listar Produto</h1>
    <a href="home.php?menu=produto&submenu=cadastrar" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i>
        Cadastrar
    </a>
</div>

<div class="row">
    <div class="col-12">
   
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Valor</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Opções</th>
                            </tr>
                        </tfoot>
                        <tbody>
                           <?php
                            foreach($produtos as $produto){
                                echo "<tr>
                                        <td>".$produto->idProduto."</td>
                                        <td>".$produto->nome."</td>
                                        <td>".$produto->descricao."</td>
                                        <td>".$produto->valor."</td>
                                        <td>
                                            <a href=\"home.php?menu=produto&submenu=editar&produto=".$produto->idProduto."\" class=\"btn btn-primary\">
                                                Editar
                                            </a>
                                            <a href=\"home.php?menu=produto&submenu=delete&produto=".$produto->idProduto."\" class=\"btn btn-primary\">
                                                Excluir
                                            </a>

                                        </td>
                                    </tr>";
                            }
                            
                           ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
