<?php
 function db_connection($server, $user, $pswd, $dbname)
{
  if ($conn = mysqli_connect($server, $user, $pswd, $dbname)) {
    return $conn;
  }
  return false;
}

?>
