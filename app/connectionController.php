<?php
      define("HOST", "localhost");
      define("USER", "root");
      define("PSWD", "");
      define("BDNM", "netflix");

      function connect(){
            $conn = new mysqli(HOST,USER,PSWD,BDNM);
            if($conn){
                return $conn;
            }
            return null;
        }
?>