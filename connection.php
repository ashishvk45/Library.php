<?php

  $db=mysqli_connect("localhost","root","","library");
  /*  server name, username, passwor , database name  */

  if(!$db)
  {
    die("Connection failed:" . mysqli_connect_error());

  }

?>
