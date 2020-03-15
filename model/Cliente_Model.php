<?php
namespace model;
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require('Database.php');
use model\Database as db;

class Cliente extends Pessoa_Fisica {
    public $conn;
    
    public function __construct(){
        $db = new db;
        $this->conn = $db->conecta();
    }

    public function getAll(){
        $sql = "SELECT * from Cliente";
        $result=$this->conn->query($sql);
        $data = array();
        while($r = $result->fetch_assoc()){
            $data[] = $r;
        }

        return json_encode($data);

    }

    public function getCliente($id){
        $sql = "SELECT * from Cliente 
                WHERE idCliente=$id";
        $result = $this->conn->query($sql);
        $data = array();
        while($r = $result->fetch_assoc()){
            $data[] = $r;
        }
        return json_encode($data);
    }

    public function create($data){

        $sql = "INSERT INTO Cliente (ultima_compra,idPessoa_Fisica,idPessoa_Juridica) 
                VALUES (NULL,$data->idPessoaFisica,$data->idPessoa_Juridica)";
        $result=$this->conn->query($sql);

        return $result;
    }

    public function update($data){
        $sql = "UPDATE Cliente 
                set ultima_compra=$data->ultima_compra 
                WHERE idCliente=$data->idCliente";
        $result = $this->conn->query($sql);

        return $result;
    }

    public function delete($id){
        $sql = "DELETE from Cliente WHERE idCliente=$id";
        $result= $this->conn->query($sql);

        return $result;
    }

    public function __destruct(){
        $db= new db;
        $db->desconecta($this->conn);
        $this->conn=null;
    }
}