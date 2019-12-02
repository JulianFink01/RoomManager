<?php
  require_once("change_windows/change_profilepicture.php");
  require_once("change_windows/change_infos.php");
  require_once("alertPrompt.php");
?>

<div id="home-content">
    <div class="home-container">
      <div id="profilepicture-container">
        <img onclick="openWindow('changeProfilepicture')" id="home_profilepicture" src="style/ProfilePictures/<?php echo $user->getProfilePicture() ?>" alt="<?php echo $user->getUsername().' Profilbild'?>"/>
      </div>
    </div>
    <div class="home-container">
      <?php
      if(isset($_SESSION["code"])){
        ?>
        <div id="code">
          <a <?php
          if($user->isAdmin()){
            ?>
            $s1 = "lastused";
            $s2 = 'openWindow("$s1")'
            $s = 'onclick="$s2"';
            echo "onclick='openWindow('lastused')'";
            <?php
          }
          ?>><?php echo $_SESSION["code"];?></a>
        </div>
        <?php
      }else{ ?>
      <form class="home_btn" action="code.php" method="post">
          <input type="submit" name="code" value="Get the code">
      </form>
      <?php
      }
      ?>
    </div>
    <div class="home-container">
      <form class="home_btn"  action="#" method="get">
          <input onclick="openWindow('changeInfos')" type="submit"value="Update Infos">
      </form>
    </div>
    <div class="home-container">
      <form class="home_btn" id="logout" action="logout.php" method="get">
            <input type="submit"value="logout">
        </form>
    </div>
</div>
