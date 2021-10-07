<?php

namespace SpeakDev\Controllers;

class RegistrarController{

  public function index(){

    if(isset($_POST['registrar'])){
      
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      //E-MAIL ~ VALIDAÇÃO
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){ //ESSA É UMA VALIDAÇÃO PARA VERIFICAR SE O EMAIL É VALIDO OU NÃO.
      \SpeakDev\Utilidades::alerta('Email inválido!');
       \SpeakDev\Utilidades::redirect('http://localhost/Projetos/redesocialdevweb20_/registrar');

       //SENHA
      }else if(strlen($password) < 7){
        \SpeakDev\Utilidades::alerta('Sua senha é muito curta, mínimo 8 caracteres.');
        \SpeakDev\Utilidades::redirect('http://localhost/Projetos/redesocialdevweb20_/registrar');
      }else{
        // REGISTRAR USUÁRIO
        $password = \SpeakDev\Bcrypt::hash($password);
        $registro = \SpeakDev\MySql::connect()->prepare("INSERT INTO usuarios VALUES (null,?,?,?)");
        $registro->execute(array($name,$email,$password));

        \SpeakDev\Utilidades::alerta('Registrado com sucesso meu querido(a)!');
        \SpeakDev\Utilidades::redirect(INCLUDE_PATH_STATIC.'http://localhost/Projetos/redesocialdevweb20_/');
        
      }
    }
      \SpeakDev\Views\MainView::render('registrar');
  }
}

?>