<div id="register-background">
    <div id="register">
      <i onclick="switchLogin()"class="fa fa-times" id="close-register" aria-hidden="true"></i>
        <div class="inner-register" id="register-left">
            <img src="style/Images/login-icon.png" alt="login-icon" />
        </div>
        <div class="inner-register" id="register-right">
            <form id="register-form" action="register.php" method="post">
                  <input type="text" placeholder="Name" name="name" required />
                  <input type="text" placeholder="Surname" name="surname" required />
                  <input type="text" placeholder="Username" name="username" required />
                  <input type="text" placeholder="Email" name="email" required />
                  <input type="password" placeholder="Password" name="password" required />
                  <input type="submit" value="Register" />
            </form>
        </div>
    </div>
</div>
