<?php
namespace model;
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require('Database.php');
use model\Database as db;

class Pessoa_Juridica  extends Pessoa{
    public $conn;
    
    public function __construct(){
        $db = new db;
        $this->conn = $db->conecta();
    }

    public function getAll(){
        $sql = "SELECT * from Pessoa_Juridica";
        $result=$this->conn->query($sql);
        $data = array();
        while($r = $result->fetch_assoc()){
            $data[] = $r;
        }

        return json_encode($data);

    }

    public function getPessoaFisica($id){
        $sql = "SELECT * from Pessoa_Juridica 
                WHERE idPessoa_Juridica=$id";
        $result = $this->conn->query($sql);
        $data = array();
        while($r = $result->fetch_assoc()){
            $data[] = $r;
        }
        return json_encode($data);
    }

    public function create($data){

        $sql = "INSERT INTO Pessoa_Juridica (razao_social,cnpj,idPessoa) 
                VALUES ('$data->razao_social','$data->cnpj',$data->idPessoa)";
        $result=$this->conn->query($sql);

        return $result;
    }

    public function update($data){
        $sql = "UPDATE Pessoa_Juridica 
                set razao_social='$data->razao_social',cnpj='$data->cnpj',
                idPessoa='$data->idPessoa',
                WHERE idPessoa_Juridica=$data->idPessoa_Juridica";
        $result = $this->conn->query($sql);

        return $result;
    }

    public function delete($id){
        $sql = "DELETE from Pessoa_Juridica WHERE idPessoa_Juridica=$id";
        $result= $this->conn->query($sql);

        return $result;
    }

    public function __destruct(){
        $db= new db;
        $db->desconecta($this->conn);
        $this->conn=null;
    }
}