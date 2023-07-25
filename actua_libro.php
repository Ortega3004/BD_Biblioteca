<?php
$link=mysqli_connect("localhost:3307","root","","biblioteca");
if($link === 0){
    die("Error".mysqli_connect_error());
}
//crear cariables para enviarlo a la BD
$ID=$_POST["ID_libro"];
$Titulo=$_POST["Titulo"];
$Autor=$_POST["Autor"];
$Editorial=$_POST["Editorial"];
$Anio_publicacion=$_POST["Anio_publicacion"];
$Cantidad_libros=$_POST["Cantidad_libros"];

 $actualizar="UPDATE libros SET Titulo='$Titulo', Autor='$Autor', Editorial='$Editorial', Anio_publicacion='$Anio_publicacion', Cantidad_libros='$Cantidad_libros' WHERE ID_libro='$ID'";
 if(mysqli_query($link,$actualizar)){

    if(mysqli_affected_rows($link)>0){
echo '<script type="text/javascript">
  alert("DATOS ACTUALIZADOS");
window.location.href="actua_libro.html";
</script>
'; 
}else{
 '<script type="text/javascript">
  alert("NO EXISTE EL LIBRO");
 window.location.href="actua_libro.html";
</script>
 '; 
}
}else{
    echo '<script type="text/javascript">
    alert("DATOS NO ACTUALIZADOS");
  window.location.href="actua_libro.html";
  </script>
  '; 
}
mysqli_close($link);
?>