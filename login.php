<?php
  session_start();
  require_once("db.php");
  require_once("user.php");
  require("allUser.php");

  $username = $_POST["username"];
  $password = md5($_POST["password"]);

  $db = new db();
  $sql = "select id from user where username like '$username' and passwort like '$password'";
  if($db->numRows($sql) == 1){
    $arr = $db->query($sql);
    foreach($arr as $u){
      $id = $u["id"];
      unset($_SESSION["Error"]);
      $_SESSION["loggedIn"] = true;
      $_SESSION["UserId"] = $id;
      $db->close();
      header("Location: index.php");
    }
  }else{
    $_SESSION["Error"] = "Deine eingegebenen Daten sind nicht richtig!";
    header("Location: index.php");
  }

?>
