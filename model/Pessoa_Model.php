<?php
namespace model;
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require('Database.php');
use model\Database as db;

class Pessoa {
    public $conn;
    
    public function __construct(){
        $db = new db;
        $this->conn = $db->conecta();
    }

    public function getAll(){
        $sql = "SELECT * from Pessoa";
        $result=$this->conn->query($sql);
        $data = array();
        while($r = $result->fetch_assoc()){
            $data[] = $r;
        }

        return json_encode($data);

    }

    public function getPessoa($id){
        $sql = "SELECT * from Pessoa 
                WHERE idPessoa=$id";
        $result = $this->conn->query($sql);
        $data = array();
        while($r = $result->fetch_assoc()){
            $data[] = $r;
        }
        return json_encode($data);
    }

    public function create($data){

        $sql = "INSERT INTO Pessoa (nome,telefone,email) 
                VALUES ($data->nome,$data->telefone,$data->email)";
        $result=$this->conn->query($sql);

        return $result;
    }

    public function update($data){
        $sql = "UPDATE Usuario set nome='$data->nome',email='$data->email,telefone='$data->telefone 
                WHERE idUsuario=$data->idUsuario";
        $result = $this->conn->query($sql);

        return $result;
    }

    public function delete($id){
        $sql = "DELETE from Pessoa WHERE idPessoa=$id";
        $result= $this->conn->query($sql);

        return $result;
    }

    public function __destruct(){
        $db= new db;
        $db->desconecta($this->conn);
        $this->conn=null;
    }
}