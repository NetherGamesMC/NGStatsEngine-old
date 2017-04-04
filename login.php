<?php
header("Location: auth/");
if (isset($_POST["submit"])) {
    session_start();
    $_SESSION["player"] = strip_tags($_POST["player"]);
    header("Location: vote");
}
?>

<?php
include "_header.php";
?>

<div class='content'>
<div class='paper'>
<h2 class="content-subhead">Login</h2>
<p>Enter your in-game name below and tap the login button.</p>
<form class="pure-form pure-form-stacked" action="" method="POST" enctype="multipart/form-data"> 
    <input type="text" placeholder="Player" name="player" class="form-control">
  <p><input class="pure-button pure-button-primary" type="submit" name="submit" value="Login"/></p>
</form>
</div>
</div>

<?php
include "_footer.php";
?>
