<?php
  session_start();
  unset($_SESSION["loggedIn"]);
  unset($_SESSION["Error"]);
  unset($_SESSION["Info"]);
  header("Location: index.php");
?>
