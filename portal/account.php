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
$password = $_SESSION['password'];
$sql = "SELECT * FROM imagicalnet_players WHERE name='{$username}' LIMIT 1"; 
$r_query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($r_query,MYSQLI_ASSOC);
} else {
header('Location: ../auth/?redirect=portal/');
}
include "_header.php";
?>
<div class="content">

<div class="paper">
   <h2 class="content-subhead">NetherGames profile for <?php echo $username; ?></h2>
   <form action="accountedit.php" method="POST">
<?php
echo "Email: <input type=\"email\" name=\"email\" class=\"form-control\" value=\"".$row['email']."\" required /><br />";
echo "Bio: <br /><textarea rows=\"4\" cols=\"50\" class=\"inputform text\" name=\"bio\" />".$row['bio']."</textarea><br /><br />";
echo "<input type=\"hidden\" name=\"edit\" value=\"nopassword\" /><input type=\"submit\" class=\"pure-button pure-button-primary\" value=\"Submit\" /></form>";
echo "<h3>Change Password</h3>";
echo "<form action=\"accountedit.php\" method=\"POST\">";
echo "Old password: <input type=\"password\" name=\"oldpassword\" class=\"form-control\" required /><br />";
echo "New password: <input type=\"password\" name=\"newpassword1\" class=\"form-control\" required /><br />";
echo "Retype new password: <input type=\"password\" name=\"newpassword2\" class=\"form-control\" required /><br />";
echo "<input type=\"hidden\" name=\"edit\" value=\"password\" /><input type=\"submit\" class=\"pure-button pure-button-primary\" value=\"Submit\" /></form>";
?>
</div>
</div>
<?php
include "_footer.php";
?>
