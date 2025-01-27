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

    public function getUserById($usr){
        $usr = mysqli_real_escape_string($this->conn,$usr);
        $sql = "SELECT * from Usuario 
                WHERE idUsuario=$usr";
        $result = $this->conn->query($sql);
        $data = array();
        while($r = $result->fetch_assoc()){
            $data[]=$r;
        }

        return json_decode(json_encode($data));
    }


    public function getUserByLogin($usr){
        $usr = mysqli_real_escape_string($this->conn,$usr);
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
        $login = mysqli_real_escape_string($this->conn,$data->login);
        $sql = "INSERT INTO Usuario (login,senha,idPessoa)
                VALUES ('$login','$data->senha',$data->idPessoa)";
        $result=$this->conn->query($sql) or die(mysqli_error($this->conn));
        return $result;
    }

    public function updateUser($data){
    
        $login = mysqli_real_escape_string($this->conn,$data->login);
        $sql = "UPDATE Usuario set login='$login'  
                WHERE idUsuario=$data->idUsuario";
        $result = $this->conn->query($sql) or die(mysqli_error($this->conn));

        return $result;
    }

    public function updatePassword($pwd,$id){
        $sql = "UPDATE Usuario set senha='$pwd'
                WHERE idUsuario=$id";
        $result = $this->conn->query($sql);

        return $result;
    }

    public function checkLogin($usr,$pwd){

        $usr = mysqli_real_escape_string($this->conn,$usr);
        $sql = "SELECT * from Usuario 
                WHERE idUsuario=$usr";
        $result = $this->conn->query($sql);
        $data = array();
        while($r = $result->fetch_assoc()){
            $data[]=$r;
        }

        return json_decode(json_encode($data));
    }

    public function delete($id){
        $sql = "DELETE from Usuario WHERE idUsuario=$id";
        $result= $this->conn->query($sql) or die(mysqli_error($this->conn));

        return $result;
    }

    public function __destruct(){
      $db = new db;
      $db->desconecta($this->conn);
      $this->conn=null;
    }

}


?>