<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../includes/config.php';
$db_database = 'imagicalnet';
mysqli_select_db($con, $db_database);

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {    
$username = $_SESSION['username'];
$sessionalpassword = $_SESSION['password'];
$errormsg = NULL;
$errormsg1 = NULL;
} else {
header('Location: ../auth/?redirect=portal/');
}
include "_header.php";
?>
<div class="content">

<div class="paper">
   <h2 class="content-subhead">NetherGames profile for <?php echo $username; ?></h2>
<?php
if (isset($_POST['edit'])) {
$editaction = $_POST['edit'];
if ($editaction == "nopassword") {
if (!isset($_POST['email'])) {
$errormsg = "<p>An email address is required.</p>";
}

$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errormsg = "<p>The email address you entered is invalid.</p>"; 
}

if (!empty($_POST['bio'])) {
$bio = $_POST['bio'];
} else {
$bio = NULL;
}

if (!empty($errormsg)) {
echo $errormsg;
} else {
$sql = "UPDATE imagicalnet_players SET email='$email', bio='$bio' WHERE name='{$username}'"; 
$r_query = mysqli_query($con,$sql);
if (!$r_query) {
echo "<p>Database error: ".mysqli_connect_error()."</p>";
} else {
echo "<p>Successfully edited profile.</p>";
}
}
} elseif ($editaction == "password") {
if (!isset($_POST['oldpassword'])) {
$errormsg = "<p>Your old password is required.</p>";
} elseif (!isset($_POST['newpassword1'])) {
$errormsg = "<p>Your new password is required.</p>";
} elseif (!isset($_POST['newpassword2'])) {
$errormsg = "<p>You new password is required twice.</p>";
}

if (!empty($errormsg)) {
echo $errormsg;
} else {
function hashME2($password, $player){
		 $salt = strtolower($player);
		 return hash("sha512", $password . $salt, true) ^ hash("whirlpool", $salt . $password, true);
}

$oldpassword = $_POST['oldpassword'];
$newpassword1 = $_POST['newpassword1'];
$newpassword2 = $_POST['newpassword2'];
$oldpassword1 = hashME2($oldpassword, $username);

if ($oldpassword1 !== $sessionalpassword) {
$errormsg1 = "<p>Your old password is incorrect.</p>";
}
if ($newpassword1 !== $newpassword2) {
$errormsg1 = "<p>Your two new passwords do not match.</p>";
}

if (!empty($errormsg1)) {
echo $errormsg1;
} else {
$newpassword = hashME2($newpassword1, $username);
$sql = "UPDATE haaccs SET hash='$newpassword' WHERE name='{$username}'"; 
$r_query = mysqli_query($con,$sql);
if (!$r_query) {
echo "<p>Database error: ".mysqli_connect_error()."</p>";
} else {
echo "<p>Successfully changed password.</p>";
}
}
}
}
} else {
echo "<p>Invalid edit action.</p>";
}
?>
</div>
</div>
<?php
include "_footer.php";
?>
