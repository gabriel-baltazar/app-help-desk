<?php
  session_start(); // para ter acesso a global
  session_destroy();
  header('Location:index.php');
/* 
  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';

  //Remover indices do array de sessao
  //unset()

  unset($_SESSION['x']);

  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';



  //destruir a variavel de sessao
  //session_destroy
  session_destroy(); //sera destruida na nova requisiçao

  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>'; */

  


?>