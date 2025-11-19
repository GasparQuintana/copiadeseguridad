<?php
$conexion=mysqli_connect("localhost","root","","alumnos_db");
$id=$_GET['id'];
$sql="DELETE FROM sagas WHERE id=$id";
mysqli_query($conexion,$sql);
header("Location: index.php");
exit();
