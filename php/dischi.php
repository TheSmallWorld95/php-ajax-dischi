<?php
  require './dati.php';

  header('Content-Type: application/json');

  echo json_encode($database);

 ?>
