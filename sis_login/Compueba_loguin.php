<?php
     
     try{
         
        $base=new PDO ("msql:host=localhost;dbname=prueba","root","");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERR_MODE_EXCEPTION);
        
        $sql="SELECT *FROM usuarios_pass WHERE USUARIOS= :login AND PASSWORD= :password";
        $resultado=$base->prepare($sql);
        
        $login=htmlentities(addslashes($POST["login"]));
        $password=htmlentities(addslashes($POST["password"]));
        
        $resultado->bindValue(":login, $login");
        $resultado->bindValue(":password, $password");
        $resultado->execute();
        
        
        $numero_registro=$resultado->rowCount();
        
        if($numero_registro!=0){
            
            echo"<h2>existes</h2>";
            
        }else{
            header("location:Comprueba_loguin.php");
            
        }
        
     } catch (Exception $ex) {
         die("Error: " . $ex->getMessage());
         

     }



?>










