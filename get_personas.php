<?php
  function get_personas(){
    include_once ('db_connection.php');

    $conn = db_connection('localhost','root','','academia');
    $sql="SELECT * FROM personas;";
    $personas = array();
    $errors = array();

    if($query = mysqli_query($conn, $sql)){
      while ($row = mysqli_fetch_assoc($query)) {
        $personas[] = $row;
      }
    } else {
      $errors[] = mysqli_error($conn);
    }
    mysqli_close($conn);
    if (empty($errors)) {
      return $personas;
    }
    return array(
      'errors' => $errors
    );
  }
 ?>
