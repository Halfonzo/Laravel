<?php

  $var = $_POST['emisor'];

  $nombre_archivo = "data.txt"; 

  $file = fopen($nombre_archivo, "r");
  //Output a line of the file until the end is reached
  while(!feof($file))
  { 
    $dato = fgets($file);
    if(strpos($dato,$var)>-1){
      echo $dato."<br />";
    }      
  }
  fclose($file);

?>