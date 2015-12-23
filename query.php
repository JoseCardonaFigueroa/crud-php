<?php
  include_once("db_connection.php");

  if($query = mysqli_query($conn, "SELECT * FROM personas")){
    while ($fila = mysqli_fetch_assoc($query)) {

      var_dump($fila);
    }

  }


  mysqli_close($conn);
?>
