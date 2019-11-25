<?php
  session_start();
  require_once("db.php");
  $db = new db();
  $sql;

  if(isset($_POST["profilepicture"])){
    $img = $_POST["profilepicture"];
    $id = $_SESSION["UserId"];
    $sql = "update user set profilepicture = '$img' where id = $id ";

    //FOTO UPLOAD MISSING

    }
  $db->update($sql);
  //header("Location: index.php");
?>
