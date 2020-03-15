<?php
namespace model;
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require('Database.php');


use model\Database as db;


class Usuario {

    public $conn;
    public function __construct(){
        $db = new db;
        $this->conn = $db->conecta();
    }

    public function getAll(){
        $sql = "SELECT * from Usuario";
        $result=$this->conn->query($sql);
        $data = array();
        while($r = $result->fetch_assoc()){
            $data[]=$r;
        }
        
       
        return json_encode($data);
    }

    public function getUser($usr){
        $sql = "SELECT * from Usuario 
                WHERE login='$usr'";
        $result = $this->conn->query($sql);
        $data = array();
        while($r = $result->fetch_assoc()){
            $data[]=$r;
        }

        return json_decode(json_encode($data));
    }

    public function create($data){

        $sql = "INSERT INTO Usuario (login,senha,idPessoa)
                VALUES ($data->login,$data->senha,$data->idPessoa)";
        $result=$this->conn->query($sql);

        return $result;
    }

    public function updateUser($data){
        $sql = "UPDATE Usuario set login='$data->login'
                WHERE idUsuario=$data->idUsuario";
        $result = $this->conn->query($sql);

        return $result;
    }

    public function updatePassword($pwd,$id){
        $sql = "UPDATE Usuario set senha='$pwd'
                WHERE idUsuario=$id";
        $result = $this->conn->query($sql);

        return $result;
    }

    public function deleteUser($id){
        $sql = "DELETE from Usuario WHERE idUsuario=$id";
        $result= $this->conn->query($sql);

        return $result;
    }

    public function __destruct(){
      $db = new db;
      $db->desconecta($this->conn);
      $this->conn=null;
    }

}


?>