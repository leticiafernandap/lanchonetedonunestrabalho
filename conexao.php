<?php
     $hostname = "localhost";
     $banco = "lanchonete_subway";
     $usuario = "root";
     $senha = "";
 
     $msqli = new mysqli ($hostname,$usuario,$senha,$banco);
 
     if($mysqli->connect_errno){
          echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
     }
 
?>