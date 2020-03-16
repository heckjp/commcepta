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
        $msg= 'Usuário não encontrado';
    }
    else{
        $data=$data[0];
        if($data->idUsuario == $_SESSION['id']){
            $msg= 'Não é possivel excluir o usuário com a sessão ativa';
        }
        else{
            $ret=$usr->deleteUser($data->idUsuario);
            $msg= $ret;
        }
    }
} else {
    
    $msg= 'Usuário não encontrado';
}
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Deletar Usuário</h1>
    <a href="home.php?menu=usuario&submenu=listar" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i>
        Voltar para a Lista
    </a>
</div>
<div class="row">
    <div class="col-12">
        <h3><?php echo $msg;?></h3>
</div>



