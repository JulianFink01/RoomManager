<?php
  session_start();
  require_once("db.php");
  $db = new db();
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
      }else{
      move_uploaded_file($temp_name,$path_filename_ext);
      $_SESSION["Info"]= "Congratulations! File Uploaded Successfully.";
      }
    $db->update($sql);
  }
  header("Location: index.php");
?>
