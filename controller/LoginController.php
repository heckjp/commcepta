<?php 
namespace controller;

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once("../model/Usuario_Model.php");

use model\Usuario as UsuarioModel;

class LoginController{
  private $db;

  public function __construct(){
    session_start();
    $this->db = new UsuarioModel;
  }

  public function login($data){
    $data = json_decode(json_encode($data));
    $usr = $this->db->getUserByLogin($data->login);
    if(sizeof($usr)==1){
      $usr = $usr[0];
      if(password_verify($data->senha,$usr->senha)){
        if(isset($_SESSION['msg'])){
          unset($_SESSION['msg']);
        }
        $_SESSION['user'] = $usr->login;
        $_SESSION['id'] = $usr->idUsuario;
        header('Location:../home.php');
       }
       else{
         $_SESSION['msg'] = 'Usuário ou senha inválida!';
        header('Location:../login.php');
       }
    }
    else{
      $_SESSION['msg'] = 'Usuário ou senha inválida';
      header('Location:../login.php');
    }
  }

  public function logout(){
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