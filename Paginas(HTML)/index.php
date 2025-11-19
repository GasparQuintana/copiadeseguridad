<?php
$conexion = mysqli_connect("localhost","root","","alumnos_db");
$sql="SELECT * FROM sagas";
$resultado=mysqli_query($conexion,$sql);
?>
<!DOCTYPE html><html><head>
<meta charset="UTF-8"><title>Sagas Spider‑Man</title>
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
<h1 class="mb-3">Sagas de Spider‑Man</h1>
<a href="agregar_saga.php" class="btn btn-primary mb-3">Agregar nueva saga</a>
<table class="table table-striped">
<thead><tr><th>ID</th><th>Saga</th><th>Escritor</th><th>Año</th><th>Acciones</th></tr></thead>
<tbody>
<?php while($fila=mysqli_fetch_assoc($resultado)){ ?>
<tr>
<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombre_saga']; ?></td>
<td><?php echo $fila['escritor']; ?></td>
<td><?php echo $fila['anio']; ?></td>
<td>
<a href="editar_saga.php?id=<?php echo $fila['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
<a href="eliminar_saga.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar saga?');">Eliminar</a>
</td>
</tr>
<?php } ?>
</tbody></table></div>



</body>

</html>
