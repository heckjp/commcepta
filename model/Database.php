<?php
namespace model;

class Database {
        private $host;
        private $database;
        private $user;
        private $password;
  
    public function __construct(){
        $this->host='localhost';
        $this->database = 'commcepta';
        $this->user='root';
        $this->password='Ubuntu@2020';

    }

    public function conecta(){
       $conn=mysqli_connect($this->host,$this->user,$this->password,$this->database);

       if(!$conn){
            return (mysqli_connect_error().PHP_EOL);
       }

       return $conn;
   

    }

    public function insert($table, $data) {
        $key = array_keys($data);
        $val = array_values($data);
        $sql = "INSERT INTO $table (" . implode(', ', $key) . ") "
             . "VALUES ('" . implode("', '", $val) . "')";  
    }

    public function update($table, $data, $where) {
    $cols = array();
 
    foreach($data as $key=>$val) {
        $cols[] = "$key = '$val'";
    }
    $sql = "UPDATE $table SET " . implode(', ', $cols) . " WHERE $where";
 
    return($sql);
    }


    public function desconecta($con){
        return mysqli_close($con);
    }
    
}

?>