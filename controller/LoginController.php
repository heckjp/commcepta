<?php 
namespace controller;

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once("../model/Usuario_Model.php");

use model\Usuario as UsuarioModel;

class LoginController{
    
  public function login($data){
    session_start();
    $data = json_decode(json_encode($data));
    $db = new UsuarioModel;
    $usr = $db->getUser($data->login,$data->senha);
    if(sizeof($usr)==1){
      $usr = $usr[0];
      print_r($data->senha);
      print_r($usr->senha);
      if(password_verify($data->senha,$usr->senha)){
        $_SESSION['user'] = $usr->login;
        header('Location:../home.php');
       }
       else{
        header('Location:../login.php');
       }
    }
    else{
      header('Location:../login.php');
    }
  }

  public function logout(){
    session_start();
    session_destroy();
      header('Location:../index.php');
  }

}

if($_POST){
  $url = $_SERVER['HTTP_REFERER'];
  echo $url."<br>";
  $login = new LoginController;
  $login->login($_POST);
 }

 if($_GET['deslogar']){
   $logout = new LoginController;
   $logout->logout();
 }


?>