<?php
  session_start();
  require_once("db.php");
  $db = new db();


  //Change Profile Picture
  if(isset($_FILES['profilepicture']['name'])){
    $img = $_FILES['profilepicture']['name'];
    $id = $_SESSION["UserId"];
    $sql = "update user set profilepicture = '$img' where id = $id ";


      //FOTO UPLOAD MISSING
      $target_dir = "style/ProfilePictures/";
      $file = $_FILES['profilepicture']['name'];
      $path = pathinfo($file);
      $filename = $path['filename'];
      $ext = $path['extension'];
      $temp_name = $_FILES['profilepicture']['tmp_name'];
      $path_filename_ext = $target_dir.$filename.".".$ext;

      // Check if file already exists
      if (file_exists($path_filename_ext)) {
        $_SESSION["Error"] ="File already exists";
        header("Location: index.php");
      }else{
      move_uploaded_file($temp_name,$path_filename_ext);
      unset($_SESSION["Error"]);
      $_SESSION["Info"]= "Congratulations! File Uploaded Successfully.";
      $db->update($sql);
      }
  }

  $id = $_SESSION["UserId"];
  $pass = $_POST["password"];
  $hpass = md5($_POST["password"]);
  $email = $_POST["email"];
  $uname = $_POST["username"];
  $code = $_POST["code"];
  //Change password
  if($pass != ""){
    $sql = "update user set passwort = '$hpass' where id = $id ";
    $db->update($sql);
  }
  //Change Username
  if($uname != ""){
    $sql1 = "select id from user where username like '$uname'";
    if($db->numRows($sql1) >= 1){
      $_SESSION["Error"] = "Deine Benutzernamen ist bereits vorhanden!";
      header("Location: index.php");
    }else{
      $sql = "update user set username = '$uname' where id = $id ";
      $db->update($sql);
      unset($_SESSION["Error"]);
    }
  }
  //Change email
  if($email != ""){
    $sql = "update user set email = '$email' where id = $id ";
    $db->update($sql);
  }
  //Change code
  if($code != ""){
    $sql = "update code set code = '$code' where id = 1";
    unset($_SESSION["code"]);
    $db->update($sql);
  }
  $db->close();

  header("Location: index.php");
?>
