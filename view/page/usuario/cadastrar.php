<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
include_once("controller/UsuarioController.php");
use controller\UsuarioController as usuario;
$usr = new usuario;
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cadastrar Usuário</h1>
    <a href="home.php?menu=usuario&submenu=listar" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                        <label for="login">Login</label>
                        <input type="text" name="login" id="login">
                    </div>
                    <div class="form-group ">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha">
                    </div>
                        <input type="hidden" value="null" name="idPessoa" id="idPessoa">
                        <input type="submit" class="btn btn-primary" value="Cadastrar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    if($_POST){
        $ret=$usr->insertUser($_POST);
        echo $ret;
    }
?>


