<div id="login-background" class="visible">
    <div id="login">
        <div class="inner-login" id="login-left">
            <img src="style/Images/login-icon.png" alt="login-icon" />
        </div>
        <div class="inner-login" id="login-right">
            <form id="login-form" action="login.php" method="POST">
                  <legend class="<?php if(isset($_SESSION["Error"])){echo 'redtext';} else if(isset($_SESSION["Info"])){echo 'greentext';}?>"><?php if(isset($_SESSION["Error"]))
                    {
                      echo $_SESSION["Error"];
                    }else if(isset($_SESSION["Info"]))
                      {
                        echo $_SESSION["Info"];
                      }?>
                  </legend>
                  <input type="text" placeholder="Username" name="username" required />
                  <input type="password" placeholder="Password" name="password" required />
                  <input type="submit" value="Login" />
            </form>
        </div>

        <span onclick="switchLogin()">
            Noch nicht registriert? <a href="#">Registriere dich jetzt!</a>
        </span>
    </div>
</div>
