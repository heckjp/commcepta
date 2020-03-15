<?php
namespace model;
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require('Database.php');
use model\Database as db;

class Produto {
    public $conn;
    
    public function __construct(){
        $db = new db;
        $this->conn = $db->conecta();
    }

    public function getAll(){
        $sql = "SELECT * from Produto";
        $result=$this->conn->query($sql);
        $data = array();
        while($r = $result->fetch_assoc()){
            $data[] = $r;
        }

        return json_encode($data);

    }

    public function getProduto($id){
        $sql = "SELECT * from Produto 
                WHERE idProduto=$id";
        $result = $this->conn->query($sql);
        $data = array();
        while($r = $result->fetch_assoc()){
            $data[] = $r;
        }
        return json_encode($data);
    }

    public function create($data){

        $sql = "INSERT INTO Produto (nome,descricao,valor,codigo_barra) 
                VALUES ('$data->nome','$data->descricao',$data->valor,$data->codigo_barra)";
        $result=$this->conn->query($sql);

        return $result;
    }

    public function update($data){
        $sql = "UPDATE Produto 
                set nome='$data->nome',descricao='$data->descricao',
                valor=$data->valor,codigo_barra='$data->codigo_barra',
                WHERE idProduto=$data->idProduto";
        $result = $this->conn->query($sql);

        return $result;
    }

    public function delete($id){
        $sql = "DELETE from Produto WHERE idProduto=$id";
        $result= $this->conn->query($sql);

        return $result;
    }

    public function __destruct(){
        $db= new db;
        $db->desconecta($this->conn);
        $this->conn=null;
    }
}