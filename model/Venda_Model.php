<?php
namespace model;
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require('Database.php');
use model\Database as db;

class Venda {
    public $conn;
    
    public function __construct(){
        $db = new db;
        $this->conn = $db->conecta();
    }

    public function getAll(){
        $sql = "SELECT * from Venda";
        $result=$this->conn->query($sql);
        $data = array();
        while($r = $result->fetch_assoc()){
            $data[] = $r;
        }

        return json_encode($data);

    }

    public function getVenda($id){
        $sql = "SELECT * from Venda 
                WHERE idVenda=$id";
        $result = $this->conn->query($sql);
        $data = array();
        while($r = $result->fetch_assoc()){
            $data[] = $r;
        }
        return json_encode($data);
    }

    public function create($data){

        $sql = "INSERT INTO Venda (data_hora,desconto,subtotal,total) 
                VALUES ('$data->data_hora',$data->desconto,$data->subtotal,$data->total
                        idCliente=$data->idCliente,idVendedor=$data->idVendedor)";
        $result=$this->conn->query($sql);

        return $result;
    }

    public function update($data){
        $sql = "UPDATE Venda 
                set data_hora='$data->data_hora',desconto=$data->desconto,
                subtotal=$data->subtotal,total=$data->total, 
                idCliente=$data->idCliente, idVendedor=$data->idVendedor 
                WHERE idVenda=$data->idVenda";
        $result = $this->conn->query($sql);

        return $result;
    }

    public function delete($id){
        $sql = "DELETE from Venda WHERE idVenda=$id";
        $result= $this->conn->query($sql);

        return $result;
    }

    public function __destruct(){
        $db= new db;
        $db->desconecta($this->conn);
        $this->conn=null;
    }
}