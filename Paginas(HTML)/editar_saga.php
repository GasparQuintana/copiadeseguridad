<?php
$conexion=mysqli_connect("localhost","root","","alumnos_db");
$id=$_GET['id'];
$sql="SELECT * FROM sagas WHERE id=$id";
$res=mysqli_query($conexion,$sql);
$fila=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html><html><head>
<meta charset="UTF-8"><title>Editar saga</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="Archivos(CSS)/Estilos_Prototipo_Joaquin.css" title="style" />
</head><body>
          <div id="menu">
<a href="INICIO_Prototipo_Gaspar.html"><img src="Imagenes_HTML/loguito.png" alt="Spider_WEB logo INICIO" height="60" width="60"></a> 
<ul>
    
<li><a href="INICIO_Prototipo_Gaspar.html">INICIO</a></li>
<li><a href="PELICULAS_Prototipo_Gaspar.html">Peliculas</a></li>
<li><a href="SERIES_Prototipo_Gaspar.html">Series</a></li>
<li><a href="COMICS_Prototipo_Gaspar.html">Comics</a></li>
<li><a href="MERCADO_Prototipo_Gaspar.html">Compra</a></li>
<li><a href="ACERCA_Prototipo_Joaquin.html">Acerca</a></li>
<li><a href="CONTACTO_Prototipo_Joaquin.html">Contacto</a></li>
</ul>
</div>
<div class="container mt-4">
<h1>Editar saga</h1>
<form action="actualizar_saga.php" method="POST" style="max-width:500px;">
<input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
<p>Nombre de la saga</p>
<input type="text" name="nombre_saga" class="form-control mb-3" value="<?php echo $fila['nombre_saga']; ?>" required>
<p>Escritor</p>
<input type="text" name="escritor" class="form-control mb-3" value="<?php echo $fila['escritor']; ?>" required>
<p>Año de lanzamiento</p>
<input type="number" name="anio" class="form-control mb-3" value="<?php echo $fila['anio']; ?>" required>
<button class="btn btn-primary">Actualizar</button>
<a href="index.php" class="btn btn-secondary">Volver</a>
</form></div></body></html>
