<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username=='afonz' && $password=='afonz33') {
  echo '<form action="tweets.php" method="post">
    <input type="submit" name="submit" value="Enviar los ultimos tweets a los suscriptores(los que aparecen abajo)">
  </form>';
 echo '<a class="twitter-timeline" data-tweet-limit="5" href="https://twitter.com/drfonzalex?ref_src=twsrc%5Etfw">Tweets by drfonzalex</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>';
}
else{
  echo "usuario o contraseña incorrecta";
}
 ?>
