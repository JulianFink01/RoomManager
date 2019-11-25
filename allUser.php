<?php
require_once("user.php");
require_once("db.php");

class allUser{

   static $mainUser;
   static $allUsers = array();

  public static function loadUsers(){
    $db = new db();
    $arr = $db->query("select * from user");
    foreach($arr as $u){
      $un = $u["username"];
      $vn = $u["vorname"];
      $nm = $u["nachname"];
      $pw = $u["passwort"];
      $id = $u["id"];
      $em = $u["email"];
      $ad;
      if($u["admin"] == "1"){
        $ad = true;
      }else{
        $ad = false;
      }
      $user = new User($id, $un, $pw, $vn, $nm, $em, $ad);
      allUser::$allUsers[] = $user;
    }
    $db->close();
  }
}


?>
