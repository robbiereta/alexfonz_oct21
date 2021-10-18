<?php
    // Include config file
    require_once '../config.php';

    // Prepare a select statement
        // Bind variables to the prepared statement as parameters

        if ($result = mysqli_query($enlace, "SELECT * FROM pacientes")) {

            /* determinar el número de filas del resultado */
            $row_cnt = mysqli_num_rows($result);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            /* cerrar el resulset */

}
        //     if(mysqli_num_rows($result) == 1){
        //         /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
        //         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        //
        //         // Retrieve individual field value
        //         $name = $row["nombre"];
        //         $address = $row["edad"];
        //     }
        //
        //  else{
        //     echo "Oops! Something went wrong. Please try again later.";
        // }


    // // Close statement
    // mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($enlace);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver pacientes</title>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf-8"></script>

    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <table id="tabla">

    </table>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Ver pacientes</h1>
                    </div>

                    <div class="span7">
<div class="widget stacked widget-table action-table">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Edad</th>
              <th class="td-actions"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              // while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
              //   echo "<td>".$row["nombre"]."</td>".
              //   "<td>".$row["edad"]."</td>";
              // }
               ?>
              <td><?php echo $row["nombre"]; ?></td>
              <td><?php echo $row["edad"]; ?></td>
              <td class="td-actions">
                <a href="javascript:;" class="btn btn-small btn-primary">
                  Consulta
                </a>

                <a href="javascript:;" class="btn btn-small btn-success">
                  Editar
                </a>
              </td>
            </tr>

            </tbody>
          </table>


			</div> <!-- /widget -->
            </div>
                    <p><a href="../index.php" class="btn btn-primary">Atras</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
