<?php
  session_start();
  require_once("db.php");
  require_once("user.php");
  require("allUser.php");

  $username = $_POST["username"];
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $password = md5($_POST["password"]);
  $email  = $_POST["email"];

  $db = new db();
  $sql = "select id from user where username like '$username'";
  if($db->numRows($sql) >= 1){
    $_SESSION["Error"] = "Deine Benutzernamen ist bereits vorhanden!";
    header("Location: index.php");
  }else{
    $sql = "insert into user (vorname, nachname, username, email, passwort, profilepicture, admin) values ('$username', '$surname', '$name', '$email','$password', 'default.png', '0')";
    $db->update($sql);
    $_SESSION["Info"] = "Dein Account wurde erfolgreich angelegt!";
    header("Location: index.php");
  }

?>
