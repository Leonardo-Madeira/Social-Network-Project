<?php

namespace DankiCode\Controllers;

class HomeController{
  public function index(){
    if(isset($_SESSION['login'])){
      //Renderiza a home do usuario.
      \DankiCode\Views\MainView::render('home');
    }else{
      //rederizar para criar conta.
      \DankiCode\Views\MainView::render('login');
    }
  }
}

?>