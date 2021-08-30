<?php
namespace SpeakDev\Controllers;

class HomeController{
  public function index(){
    if(isset($_SESSION['login'])){
      //Renderiza a home do usuario.
      \SpeakDev\Views\MainView::render('home');
    }else{
      //rederizar para criar conta.
      \SpeakDev\Views\MainView::render('login');
    }
  }
}
?>