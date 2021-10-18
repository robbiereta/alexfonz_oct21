<?php
$enlace = mysqli_connect("localhost", "i5284296_wp1", "+s]%1lWj6&;}", "suscriptores_fonz");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$consulta = "SELECT * FROM suscriptores";

if ($resultado = mysqli_query($enlace, $consulta)) {

    /* obtener array asociativo */
    while ($row = mysqli_fetch_assoc($resultado)) {
        $para  =$row["email"];
        // $para  = 'robbie.reta67@gmail.com' . ', '; // atención a la coma
        // $para .= 'wez@example.com';

        // título
        $título = 'Newsletter del Dr. Alex Fonz';

        // mensaje
        $mensaje = '
        <html>
        <head>
          <title>Newsletter del Dr. Alex Fonz</title>
        </head>
        <body>
          <p>Estos son los tweets mas recientes del Dr.Alex Fonz </p>
          <a class="twitter-timeline" data-tweet-limit="5" href="https://twitter.com/drfonzalex?ref_src=twsrc%5Etfw">Tweets by drfonzalex</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </body>
        </html>
        ';

        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $your_feedbackmail = "mail@alexfonz.com";
        // Cabeceras adicionales
        // $cabeceras .= 'To: alicia <alicia@example.com>, robbie <robbie@example.com>' . "\r\n";
        $cabeceras .= "From: $your_feedbackmail" . "\r\n";
        // J!7CR]Red}8L
        // $cabeceras .= 'Cc: archive@example.com' . "\r\n";
        // $cabeceras .= 'Bcc: check@example.com' . "\r\n";

        // Enviarlo
        mail($para, $título, $mensaje,$cabeceras);


    }
    echo "Correos enviados correctamente. <br>";
    echo "<a href='http://www.alexfonz.com'>Volver a alexfonz.com";
    /* liberar el conjunto de resultados */
    mysqli_free_result($resultado);
}

else{
  echo "fallo el envio de los correos";
}

// if ($result = mysqli_query($enlace, "SELECT * FROM suscriptores")) {
//
//     /* determinar el número de filas del resultado */
//     $row_cnt = mysqli_num_rows($result);
//     $row = mysqli_fetch_array($result, MYSQLI_NUM);
//
// }
//  echo $row[3];
// // echo $row_cnt;
// for ($i=0; $i<$row_cnt; $i++) {
//   echo $row[$i];
// }

// // Varios destinatarios

mysqli_close($enlace);
?>
