<?php
  if(isset($_SESSION["Error"])){
    $err = $_SESSION["Error"];
    echo "<script type='text/javascript'>alert('$err');</script>";
  }
?>
