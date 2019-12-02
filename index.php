<?php
  session_start();
  require_once("user.php");
?>
<!DOCTYPE HTML>
<html>
  <?php
    require_once("head.php");
  ?>
  <body>
      <?php
      if(isset($_SESSION["loggedIn"])){
        $user = User::getUser($_SESSION["UserId"]);
        require_once("tpl/home_tpl.php");
      }else{
        require_once("tpl/login_tpl.php");
        require_once("tpl/register_tpl.php");
        }
      ?>
  </body>
</html>
