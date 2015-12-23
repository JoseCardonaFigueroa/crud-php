<?php

  function insert_persona($persona){
    include_once ('db_connection.php');
    if (!($conn = db_connection('localhost', 'root', '', 'academia'))) {
      return false;
    }
    // var_dump($conn);
    // mysqli_select_db($conn, "academia");
    // echo $persona->to_sql();
    if($q = mysqli_query($conn, $persona->to_sql())){
      mysqli_close($conn);
      return true;
    }
    return false;
  }
 ?>
