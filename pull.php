<?php

  $persona = [
                "nombre" => "Pedro", 
                "edad" => 50
              ];
              
              foreach($persona as $valor){
                echo "$valor <br>";
              }
?>              


$auto = [
                "marca" => "Ford", 
                "modelo" => "Focus"
              ];
              
              foreach($auto as $posicion => $valor){
                echo "$posicion: $valor <br>";
              }
?>  
