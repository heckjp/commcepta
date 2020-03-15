<?php 
namespace controller;

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once("../model/Usuario_Model.php");

use model\Usuario as UsuarioModel;

class UsuarioController{
    
    public function list(){
        $usr = new UsuarioModel;
        $list = $usr->getAll();
        return $list;
    }

    public function getUser(){

    }

    public function insertUser($data){

    }

    public function changePassword($pwd,$id){

    }

}


?>