<?php
  session_start();
  require_once("db.php");
  require_once("user.php");

  $user = User::getUser($_SESSION["UserId"]);
  $id = $_SESSION["UserId"];

  if(isset($_POST["code"])){
    $db = new db();
    $sql = "select * from code where id = 1";

      $arr = $db->query($sql);
      foreach($arr as $u){
        $_SESSION["code"] = $u["code"];
      }

      $sql2 = "insert into gotCode (userId, datum) values ($id, now())";
      if(!$user->isAdmin()){
      $db->update($sql2);
      }
    }
    $db->close();
  header("Location: index.php");
?>
