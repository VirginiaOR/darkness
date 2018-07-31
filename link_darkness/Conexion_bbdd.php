<!doctype html>

<html> 
    <head>
        <meta charset="utf-8">
        <title>documento sin titulo</title>
    </head> 
           <body>
                 <?php>
                       $db_host="localhost";
                       $db_nombre="pueba";
                       $db_usuario="root";     
                       $db_contra="";
                       
                       $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
                       
                       $consulta="SELECT * FROM datospersonales";
                       
                       $resultados=msqli_query($conexion,$consulta);
                       
                       $fila=mysqli_fetch_row($resultados);
                       
                       echo $fila [0];
                       echo $fila [1];
                       echo $fila [2];
                       echo $fila [3];
                       
                           
               
                 ?>
         
         
         
     </body>
</html>

    
    
    
    
   


