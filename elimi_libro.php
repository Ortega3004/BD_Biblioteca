<?php
//conexion a mysql
$link=mysqli_connect("localhost:3307","root","","biblioteca");
//recoger el valor de el html
$clave=$_POST["clave"];
//consulta eliminar
$elimina="DELETE FROM libros WHERE ID_libro='$clave'";
if(mysqli_query($link,$elimina)){
    if(mysqli_affected_rows($link)>0 ){
        echo '<script type="text/javascript">
      alert("Libro eliminado");
    window.location.href="elimi_libro.html"
    </script>';
    
        }else{
        echo '<script type="text/javascript">
        alert("No existe el libro");
      window.location.href="elimi_libro.html"
      </script>
      '; 
    
     }
    }else{
        echo '<script type="text/javascript">
        alert("Libro no eliminado");
      window.location.href="elimi_libro.html"
      </script>
      '; 
        
    }
    
    mysqli_close($link);
    ?>