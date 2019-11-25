<div class="change_window" id="changeProfilepicture">
  <i onclick="openWindow('changeProfilepicture')" class="fa fa-times" id="close-register" aria-hidden="true"></i>

  <div class="inner-change-field inner-change-left">
      <img src="style/Images/login-icon.png" alt="login-icon" />
  </div>
  <div class="inner-change-field inner-change-right">
      <form class="change-form" action="update.php" method="POST">
            <input type="file" placeholder="Your new Profilepicture" name="profilepicture" required />
            <input type="submit" value="Update Profilepicture" />
      </form>
  </div>
</div>
