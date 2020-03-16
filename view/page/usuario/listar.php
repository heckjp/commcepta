<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
include_once("controller/UsuarioController.php");
use controller\UsuarioController as usuario;
$usr = new usuario;
$usuarios=json_decode($usr->list());
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Listar Usuário</h1>
    <a href="home.php?menu=usuario&submenu=cadastrar" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                                <th>Login</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                            <th>ID</th>
                            <th>Login</th>
                            <th>Opções</th>
                            </tr>
                        </tfoot>
                        <tbody>
                           <?php
                            foreach($usuarios as $usuario){
                                echo "<tr>
                                        <td>".$usuario->idUsuario."</td>
                                        <td>".$usuario->login."</td>
                                        <td>
                                            <a href=\"home.php?menu=usuario&submenu=editar&usuario=".$usuario->idUsuario."\" class=\"btn btn-primary\">
                                                Editar
                                            </a>
                                            <a href=\"home.php?menu=usuario&submenu=delete&usuario=".$usuario->idUsuario."\" class=\"btn btn-primary\">
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
