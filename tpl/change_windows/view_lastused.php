<div class="change_window" id="lastused">
  <i onclick="openWindow('lastused')" class="fa fa-times" id="close-register" aria-hidden="true"></i>

  <table id="lastused-table">
    <tr>
        <td class="lastused-table-title">Name</td>
        <td class="lastused-table-title">Datum</td>
    </tr>
      <?php
        $db = new db();
        $sql = "select user.vorname,user.profilepicture, user.nachname, gotcode.datum from user, gotcode where user.id = gotcode.userId order by datum desc";
        $erg = $db->query($sql);

        foreach($erg as $it){
          ?>
          <tr>
          <td><figure><img class="lastused-table-img" src="style/ProfilePictures/<?php echo $it["profilepicture"]; ?>"><figcaption><?php echo $it["vorname"]." ".$it["nachname"]; ?></figcaption></figure></td>
          <td><?php echo $it["datum"]; ?></td>
          </tr>
          <?php
            }
          ?>
  </table>
</div>
