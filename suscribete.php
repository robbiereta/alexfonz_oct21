<?php
$email = $_POST['email'];
$enlace = mysqli_connect("localhost", "robboloi_robbie", "QHCb,,IWDpc1", "robboloi_fonz");
$resultado=mysqli_query($enlace, "INSERT into suscriptores(email) values ('hola')");

if ($resultado){
 echo "Gracias por suscribirte.<br><a href='http://www.alexfonz.com'>Regresar a alexfonz.com</a>";
}
else
{
  echo "Hubo un error";
}
mysqli_close($enlace);

 ?>
