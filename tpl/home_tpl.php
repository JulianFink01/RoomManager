<?php
  require_once("change_windows/change_profilepicture.php");
?>

<div id="home-content">
    <div class="home-container"><img onclick="openWindow('changeProfilepicture')" id="home_profilepicture" src="style/ProfilePictures/<?php echo $user->getProfilePicture() ?>" alt="<?php echo $user->getUsername().' Profilbild'?>"/></div>
    <div class="home-container"></div>
    <div class="home-container"></div>
    <div class="home-container"></div>
</div>
