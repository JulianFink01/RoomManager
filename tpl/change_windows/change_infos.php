<div class="change_window" id="changeInfos">
  <i onclick="openWindow('changeInfos')" class="fa fa-times" id="close-register" aria-hidden="true"></i>

  <div class="inner-change-field inner-change-left">
      <img src="style/Images/login-icon.png" alt="login-icon" />
  </div>
  <div class="inner-change-field inner-change-right">
      <form class="change-form" action="update.php" method="POST" enctype="multipart/form-data" >
            <legend class="bluetext">Only the inserted values will be changed!</legend>
            <input type="text" placeholder="New Username" name="username" />
            <input type="password" placeholder="New Password" name="password"  />
            <input type="email" placeholder="New Email" name="email"  />
            <?php
              if($user->isAdmin()){
                ?>
                  <input type="text" placeholder="New Code" name="code"  />
                <?php
              }
            ?>
            <input type="submit" value="Update Infos" />
      </form>
  </div>
</div>
