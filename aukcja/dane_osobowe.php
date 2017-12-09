<?php

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$connecting -> query("SET NAMES utf8");
$connecting -> query("SET CHARACTER SET utf8");
$connecting -> query("SET collation_connection = utf8_general_ci");
$sql = "SELECT * FROM `users` WHERE id IN (SELECT ID_SPRZ FROM auction where ID_AUK LIKE '".$ID."')";
$rezult = $connecting->query($sql);

$info = mysqli_fetch_assoc($rezult);


$sql = "SELECT * FROM `auction` WHERE ID_AUK LIKE '".$ID."'";
$rezult = $connecting->query($sql);
$infoW = mysqli_fetch_assoc($rezult);

?>


<p1>Dane Sprzedającego</p1>
<table id="inf" class="table table-hover">

    <tbody>
      <tr>
        <td><p5>imie</p5></td>
        <td><p5><?php echo $info['name'];?></p5></td>
      </tr>
      <tr>
        <td><p5>nazwisko</p5></td>
        <td><p5><?php echo $info['lastname'];?></p5></td>
      </tr>
      <tr>
        <td><p5>email</p5></td>
        <td><p5><?php echo $info['email']; ?></p5></td>
      </tr>
      <tr>
        <td><p5>miasto</p5></td>
        <td><p5><?php echo $info['city']; ?></p5></td>
      </tr>
      <tr>
        <td><p5>numer tel</p5></td>
        <td><p5><?php echo $info['phone']; ?></p5></td>
      </tr>
      <?php if(isset($_SESSION['log'])){ ?>
      <tr>
        <td><p5>ulica</p5></td>
        <td><p5><?php echo $info['street']; ?></p5></td>
      </tr>
      <tr>
        <td><p5>numer domu</p5></td>
        <td><p5><?php echo $info['home']; ?></p5></td>
      </tr>
      <tr>
        <td><p5>numer konta</p5></td>
        <td><p5><?php echo $info['nrkonta']; ?></p5></td>
      </tr>
      <tr>
        <td><p5><b>login</b></p5></td>
        <td><p5><b><?php echo $info['login']; ?></b></p5></td>
      </tr>
    <?php  }?>



    </tbody>
  </table>


  <div id="pok_wiad" class="modal fade pop-up-wiad" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">

          <form>

            <div class="input-group">
              <span class="input-group-addon">tytuł aukcji</span>
              <input id="msg_tytuł" type="text" readonly class="form-control" name="msg" value="<?php echo $infoW['kr_op'] ?>" placeholder="Additional Info">
            </div>

            <div class="input-group">
              <span class="input-group-addon">temat</span>
              <input id="msg_temat" type="text" class="form-control" name="msg" placeholder="Additional Info">
            </div>

          <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea id="msg_text" class="form-control" rows="5" id="comment"></textarea>
          </div>
        </form>
        <button id='send' data-toggle='modal' data-dismiss="modal" aria-hidden="true"  class='send'></button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal mixer image -->


  
