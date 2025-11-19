<?php
$conexion=mysqli_connect("localhost","root","","alumnos_db");
$id=$_POST['id'];
$nombre=$_POST['nombre_saga'];
$escritor=$_POST['escritor'];
$anio=$_POST['anio'];
$sql="UPDATE sagas SET nombre_saga='$nombre', escritor='$escritor', anio='$anio' WHERE id=$id";
mysqli_query($conexion,$sql);
header("Location: index.php");
exit();
