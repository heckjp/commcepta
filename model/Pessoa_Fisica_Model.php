<?php
namespace model;
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require('Database.php');
use model\Database as db;

class Pessoa_Fisica extends Pessoa {
    public $conn;
    
    public function __construct(){
        $db = new db;
        $this->conn = $db->conecta();
    }

    public function getAll(){
        $sql = "SELECT * from Pessoa_Fisica";
        $result=$this->conn->query($sql);
        $data = array();
        while($r = $result->fetch_assoc()){
            $data[] = $r;
        }

        return json_encode($data);

    }

    public function getPessoaFisica($id){
        $sql = "SELECT * from Pessoa_Fisica 
                WHERE idPessoa_Fisica=$id";
        $result = $this->conn->query($sql);
        $data = array();
        while($r = $result->fetch_assoc()){
            $data[] = $r;
        }
        return json_encode($data);
    }

    public function create($data){

        $sql = "INSERT INTO Pessoa_Fisica (rg,cpf,data_nascimento,idPessoa) 
                VALUES ('$data->rg','$data->cpf',$data->data_nascimento,$data->idPessoa)";
        $result=$this->conn->query($sql);

        return $result;
    }

    public function update($data){
        $sql = "UPDATE Pessoa_Fisica 
                set rg='$data->rg',cpf='$data->cpf',
                data_nascimento=$data->data_nascimento,idPessoa='$data->idPessoa',
                WHERE idPessoa_Fisica=$data->idPessoa_Fisica";
        $result = $this->conn->query($sql);

        return $result;
    }

    public function delete($id){
        $sql = "DELETE from Pessoa_Fisica WHERE idPessoa_Fisica=$id";
        $result= $this->conn->query($sql);

        return $result;
    }

    public function __destruct(){
        $db= new db;
        $db->desconecta($this->conn);
        $this->conn=null;
    }
}