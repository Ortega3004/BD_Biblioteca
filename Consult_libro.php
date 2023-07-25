<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="ESTILO/PRINCIPAL.css">
  <link rel="stylesheet" type="text/css" href="ESTILO/Menu.css">
  <title>CONSULTA DE LIBROS</title>
</head>
<body>
  <header>
    <h1>INVENTARIO DE LIBROS</h1>
    <div class="contenedor">
      <nav class="menu">
          <a href="insertar.html">INSERTAR</a>
          <a href="actua_libro.html">ACTUALIZAR</a>
          <a href="elimi_libro.html">ELIMINAR</a>
          <a href="Consult_libro.php">INVENTARIO</a>
      </nav>

  </div>
  </header>

  <div class="container">
    <!-- Formulario para agregar un libro -->
    <form action="actua_libro.php" method="post">

<?php
$link=mysqli_connect("localhost:3307","root","","biblioteca");
if($link === 0){
    echo"error";
}

$consulta=" SELECT * FROM libros ";
$resultado=$link->query($consulta);
/*encabezoado de la tabla*/
echo'<table border="1">';
echo'<tr>';
echo '<th>ID_libro<th>';
echo '<th>Titulo<th>';
echo '<th>Autor<th>';
echo '<th>Editorial<th>';
echo '<th>Anio_publicacion<th>';
echo '<th>Cantidad_ibros<th>';
echo'</tr>';

/*recorremos c/u registros*/
while($fila=$resultado->fetch_assoc()){
    echo '<tr>';/*fila de nuestra tabla*/
echo '<td>' .$fila['ID_libro'].'<td>';
echo '<td>' .$fila['Titulo'].'<td>';
echo '<td>' .$fila['Autor'].'<td>';
echo '<td>' .$fila['Editorial'].'<td>';
echo '<td>' .$fila['Anio_publicacion'].'<td>';
echo '<td>' .$fila['Cantidad_libros'].'<td>';

echo'</tr>';
}

?>
</div>    
</body>
</html>