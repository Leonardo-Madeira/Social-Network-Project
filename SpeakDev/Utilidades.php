<?php
  
  namespace SpeakDev;

class Utilidades{

  public static function redirect($url){
    echo '<script>window.location.href="'.$url.'"</script>';
    die(); // Tem que da um Die, senão o codigo da url vai continuar sendo executado no servidor
  }

  public static function alerta($mensagem){
    echo '<script>alert("'.$mensagem.'")</script>';
  }

}



?>