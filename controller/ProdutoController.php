<?php 
namespace controller;

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once("model/Produto_Model.php");

use model\Produto as ProdutoModel;

class ProdutoController{

    public $prod;
    public function __construct(){
        $this->prod = new ProdutoModel;
    }
    
    public function list(){
        $list = $this->prod->getAll();
        return $list;
    }

    public function getProduto($id){
        return $this->prod->getProduto($id);
    }

    public function insertProduto($dados){
        $dados = json_decode(json_encode($dados));

        if($this->prod->create($dados)){
            $msg = "Produto criado com sucesso!";
        }
        else{
            $msg = "Erro ao cadastrar produto";
        }
        return $msg;

    }

    public function editProduto($dados){
        $dados = json_decode(json_encode($dados));
        if($this->prod->update($dados)){
            $msg = "Produto editado com sucesso!";
        }
        else{
            $msg = "Erro ao editar produto";
        }
        return $msg;

    }

    public function deleteProduto($id){
        if($this->prod->delete($id)){
            $msg = 'Produto deletado com sucesso';
        }
        else{
            $msg = 'Erro ao deletar produto';
        }
        return $msg;
    }

   

}


?>