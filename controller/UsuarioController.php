<?php 
namespace controller;

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
require_once("model/Usuario_Model.php");

use model\Usuario as UsuarioModel;

class UsuarioController{
    public $usr;
    public function __construct(){
        $this->usr = new UsuarioModel;
    }
  
    public function list(){
        
        $list = $this->usr->getAll();
        return $list;
    }

    public function getUser($id){
        return $this->usr->getUserById($id);

    }

    public function insertUser($dados){
        $dados = json_decode(json_encode($dados));
        $dados->senha = password_hash($dados->senha,PASSWORD_DEFAULT);
        if($this->usr->create($dados)){
            $msg = "Usuário criado com sucesso!";
        }
        else{
            $msg = "Erro ao cadastrar usuário";
        }
        return $msg;
    }

    public function editUser($dados){
        $dados = json_decode(json_encode($dados));
        if($this->usr->updateUser($dados)){
            $msg = "Usuário editado com sucesso!";
        }
        else{
            $msg = "Erro ao editar usuário";
        }
        return $msg;
      
        
    }

    public function changePassword($dados){
        $dados = json_decode(json_encode($dados));
        $dados->senha = password_hash($dados->senha,PASSWORD_DEFAULT);
        if($this->usr->changePassword($dados->senha,$dados->idUsuario)){
            $msg = "Senha alterada com sucesso!";
        }
        else{
            $msg = "Erro ao alterar senha";
        }
        return $msg;
    }

    public function deleteUser($id){
        if($this->usr->delete($id)){
            $msg = 'Usuário deletado com sucesso';
        }
        else{
            $msg = 'Erro ao deletar usuário';
        }
        return $msg;
    }

}


?>