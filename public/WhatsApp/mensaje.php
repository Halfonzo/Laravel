<?php

  $emisor   = $_POST['emisor'];
  $receptor = $_POST['receptor'];
  $mensaje  = $_POST['msg'];
  $estado   = $_POST['estado'];

  $nombre_archivo = "data.txt"; 

  $archivo = fopen($nombre_archivo, "a");
  fwrite($archivo, $emisor.",".$receptor.",".$mensaje.",".$estado."\n");
  fclose($archivo);

?>