<?php
$conexion=mysqli_connect("localhost","root","","alumnos_db");
$nombre=$_POST['nombre_saga'];
$escritor=$_POST['escritor'];
$anio=$_POST['anio'];
$sql="INSERT INTO sagas (nombre_saga,escritor,anio) VALUES ('$nombre','$escritor','$anio')";
mysqli_query($conexion,$sql);
header("Location: index.php");
exit();
