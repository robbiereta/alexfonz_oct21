<?php
  require "../config.php";
  $nombre=$_POST['nombre'];
  $edad=$_POST['edad'];

  echo $nombre ,$edad;


$resultado=mysqli_query($enlace, "INSERT into pacientes(nombre,edad) values ('$nombre','$edad')");

if ($resultado){
 echo "Se agrego el paciente con exito";
}
else
{
  echo "Hubo un error";
}

  mysqli_close($enlace);
 ?>
 <a href="../views/lista_pacientes.php">Ver la lista de pacientes</a>
