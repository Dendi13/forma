<?php 
  require __DIR__ . '/index.php';

  setcookie("login", $login, time()-3600);
  ?>