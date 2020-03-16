<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
include_once("controller/UsuarioController.php");
use controller\UsuarioController as usuario;
$usr = new usuario;
if(isset($_GET['usuario'])){
    $data = $usr->getUser($_GET['usuario']);
    if(count($data)!=1){
        header('Location:home.php?menu=usuario&submenu=listar');
    }
} else {
    $data = $usr->getUserById($_SESSION['id']);
}
$data=$data[0];

?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Editar Usuário</h1>
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
                        <input type="text" name="login" id="login" value="<?php echo $data->login;?>">
                    </div>
                        <input type="hidden" value="<?php echo $data->idPessoa;?>" name="idPessoa" id="idPessoa">
                        <input type="hidden" value="<?php echo $data->idUsuario;?>" name="idUsuario" id="idUsuario">
                        <input type="submit" class="btn btn-primary" value="Editar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    if($_POST){
        $ret=$usr->editUser($_POST);
        echo $ret;
    }
?>


