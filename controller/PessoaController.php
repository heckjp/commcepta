<?php 
namespace controller;

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once("../model/Pessoa_Model.php");

use model\Pessoa as PessoaModel;

class PessoaController{
    
    public function list(){
        $usr = new PessoaModel;
        $list = $usr->getAll();
        return $list;
    }

    public function getPessoa($id){

    }

    public function insertPessoa($data){

    }

    public function updatePessoa($data){

    }

    public function deletePessoa($data){

    }

   

}


?>