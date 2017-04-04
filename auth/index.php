<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {    
header('Location: ../portal');
} else {
session_unset();
session_destroy();
}
$status = $_GET["status"];
$redirect = $_GET["redirect"];
include "../_header.php";
?>
<div class="content">

<div class="paper">
<h2 class="content-subhead">Login</h2>
<?php if ($status == "fail1"){ echo "<p>You must enter a username and a password, error code 1.<br /></p>"; } elseif ($status == "fail2") { echo "<p>No account with that username exists, error code 2.<br /></p>"; } elseif ($status == "fail3") { echo "<p>Incorrect password, error code 3.<br /></p>"; } ?>
<form class="pure-form pure-form-stacked" action="submit.php" method="POST" enctype="multipart/form-data"> 
    <input type="text" placeholder="Username/IGN" name="username" class="form-control">
    <input type="password" placeholder="Password" name="password" class="form-control">
    <input type="hidden" name="redirect" value="<?php echo $redirect; ?>">
  <p><input class="pure-button pure-button-primary" type="submit" value="Login"/></p>
</form>
<p>Forgot your password? Reset it <a href="forgot.php">here</a>.</p>   
</div>
</div>
<?php
include "../_footer.php";
?>
