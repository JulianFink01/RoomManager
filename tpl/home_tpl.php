<?php
  require_once("change_windows/change_profilepicture.php");
?>

<div id="home-content">
    <div class="home-container">
      <div id="profilepicture-container">
        <img onclick="openWindow('changeProfilepicture')" id="home_profilepicture" src="style/ProfilePictures/<?php echo $user->getProfilePicture() ?>" alt="<?php echo $user->getUsername().' Profilbild'?>"/>
      </div>
    </div>
    <div class="home-container">
      <form class="home_btn" id="logout" action="logout.php" method="get">
          <input type="submit"value="Get the code">
      </form>
    </div>
    <div class="home-container">
      <form class="home_btn" id="logout" action="logout.php" method="get">
          <input type="submit"value="Update Profile">
      </form>
    </div>
    <div class="home-container">
      <form class="home_btn" id="logout" action="logout.php" method="get">
          <input type="submit"value="logout">
      </form>
    </div>
</div>
