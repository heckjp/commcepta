<?php 
namespace controller;

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once("../model/Produto_Model.php");

use model\Produto as ProdutoModel;

class ProdutoController{
    
    public function list(){
        $usr = new ProdutoModel;
        $list = $usr->getAll();
        return $list;
    }

    public function getProduto($id){

    }

    public function insertProduto($data){

    }

    public function updateProduto($data){

    }

    public function deleteProduto($data){

    }

   

}


?>