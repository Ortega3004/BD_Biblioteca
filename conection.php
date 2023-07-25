<?php
/* Hacer una conexión a MySQL */
/* Servidor, nombre de usuario, contraseña, nombre de la base de datos */
$link = mysqli_connect("localhost:3307", "root", "", "biblioteca");

/* Revisar si hay conexión */
    //crear caribales para enviar a la BD

 $Titulo=$_POST["Titulo"];
 $Autor=$_POST["Autor"];
 $Editorial=$_POST["Editorial"];
 $Anio_publicacion=$_POST["Anio_publicacion"];
 $Cantidad_libros=$_POST["Cantidad_libros"];


 $insertar="INSERT INTO libros (Titulo,Autor,Editorial,Anio_publicacion,Cantidad_libros) 
 values ('$Titulo','$Autor','$Editorial','$Anio_publicacion','$Cantidad_libros')";
 /*comprobar los datos */
if(mysqli_query($link,$insertar)){
 if(mysqli_affected_rows($link)>0 ){
        echo '<script type="text/javascript">
      alert("Libro Insertado");
    window.location.href="insertar.html"
    </script>';
    
        }else{
        echo '<script type="text/javascript">
        alert("No se pudo insertar el libro");
      window.location.href="insertar.html"
      </script>
      '; 
    
     }
    }else{
        echo '<script type="text/javascript">
        alert("Libro no insertado");
      window.location.href="insertar.html"
      </script>
      '; 
        
    }
    
    mysqli_close($link);
    ?>
