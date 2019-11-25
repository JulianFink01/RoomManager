<?php

/**
 * UserClass
 */
class User
{
  private $username;
  private $password;
  private $id;
  private $vorname;
  private $nachname;
  private $email;
  private $admin;
  private $profilepicture;

  public static function getUser($id){
    $db = new db();
    $sql = "select * from user where id = $id";
    $user;
    if($db->numRows($sql) == 1){
      $arr = $db->query($sql);
      foreach($arr as $u){
        $un = $u["username"];
        $vn = $u["vorname"];
        $nm = $u["nachname"];
        $pw = $u["passwort"];
        $id = $u["id"];
        $em = $u["email"];
        $pp = $u["profilepicture"];
        $ad;
        if($u["admin"] == "1"){
          $ad = true;
        }else{
          $ad = false;
        }
        $user = new User($id, $un, $pw, $vn, $nm, $em, $ad, $pp);
      }
    }
    $db->close();
    return $user;
  }

  function __construct($id,$username, $password, $vorname, $nachname, $email, $admin,$profilepicture)
  {
    $this->username = $username;
    $this->password = $password;
    $this->id = $id;
    $this->vorname = $vorname;
    $this->nachname = $nachname;
    $this->email = $email;
    $this->admin = $admin;
    $this->profilepicture = $profilepicture;
  }

  function getID(){
    return $this->id;
  }
  function getEmail(){
    return $this->email;
  }
  function isAdmin(){
    return $this->admin;
  }
  function getVorname(){
    return $this->vorname;
  }
  function getNachname(){
    return $this->nachname;
  }
  function getUsername(){
    return $this->username;
  }
  function getPassword(){
    return $this->password;
  }
  function getProfilePicture(){
    return $this->profilepicture;
  }
  function printInfos(){
      echo "ID: $this->id<br>Email: $this->email<br>Vorname: $this->vorname<br>Nachname: $this->nachname<br>Username: $this->username<br>Admin: $this->admin<br>profilepicture: $this->profilepicture<br>Password: $this->password";
  }
}
?>
