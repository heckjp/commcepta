<?php 
namespace controller;

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once("../model/Venda_Model.php");

use model\Venda as VendaModel;

class VendaController{
    
    public function list(){
        $usr = new VendaModel;
        $list = $usr->getAll();
        return $list;
    }

    public function getVenda($id){

    }

    public function insertVenda($data){

    }

    public function updateVenda($data){

    }

    public function deleteVenda($data){

    }

   

}


?>