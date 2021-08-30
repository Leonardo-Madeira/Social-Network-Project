<?php

namespace SpeakDev\Controllers;

class RegistrarController{

  public function index(){

    if(isset($_POST['registrar'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      //if(filter_var($email,FILTER_VALIDATE_EMAIL)){ ESSA É UMA VALIDAÇÃO PARA VERIFICAR SE O EMAIL É VALIDO OU NÃO, EXTREMAMENTE UTIL.
      //  \SpeakDev\Utilidades::alerta('Email inválido!');
      //  \SpeakDev\Utilidades::redirect('http://localhost/Projetos/redesocialdevweb20_/registrar');
      //}
      if(strlen($password) < 7){
        \SpeakDev\Utilidades::alerta('Sua senha é muito curta, mínimo 8 caracteres.');
        \SpeakDev\Utilidades::redirect('http://localhost/Projetos/redesocialdevweb20_/registrar');
      }else{
        $password = \SpeakDev\Bcrypt::hash($password);
        //$registro->execute(array($name,$email,$password));
        \SpeakDev\Utilidades::alerta('Registrado com sucesso');
        \SpeakDev\Utilidades::redirect(INCLUDE_PATH_STATIC.'login');
      }

    }

      \SpeakDev\Views\MainView::render('registrar');
      
  }
}

?>