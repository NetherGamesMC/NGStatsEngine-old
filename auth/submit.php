<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('Australia/Melbourne');
include '../includes/config.php';
$db_database = 'imagicalnet';
mysqli_select_db($con, $db_database);

// Login system ported from library system portal - refer to project code for troubleshooting

if (!empty($_POST['redirect'])) {
$redirect = $_POST["redirect"];
} else {
$redirect = "portal/";
}

if (isset($_POST["username"]) && isset($_POST["password"])) {    
 $username = mysqli_real_escape_string($con, $_POST['username']);
 $username = strtolower($username);
 $password2 = mysqli_real_escape_string($con, $_POST['password']);     
} else {
 header("Location: ../auth/?status=fail1&redirect=$redirect");
}

//OLD SIMPLEAUTH HASHING METHOD
function hashME($player, $password) {
    return bin2hex(hash("sha512", $password . strtolower($player), true) ^ hash("whirlpool", strtolower($player) . $password, true));
}

//NEW HEREAUTH HASHING METHOD
function hashME2($password, $player){
		 $salt = strtolower($player);
		 return hash("sha512", $password . $salt, true) ^ hash("whirlpool", $salt . $password, true);
}


//$password1 = hashME($username, $password2);
$password1 = hashME2($password2, $username);

$sql = "SELECT * FROM haaccs WHERE name='{$username}' LIMIT 1"; 
$r_query = mysqli_query($con,$sql); 

if($r_query->num_rows == 0) {
header("Location: ../auth/?status=fail2&redirect=$redirect");
} else {
  while ($row = mysqli_fetch_array($r_query,MYSQLI_ASSOC)){  
     if ($password1 == $row['hash']){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password1;
        $sql1 = "SELECT * FROM imagicalnet_players WHERE name='{". strtolower($username) . "}' LIMIT 1"; 
        $r_query1 = mysqli_query($con,$sql1); 
        if($r_query1->num_rows == 0) {
          $sql2 = "INSERT INTO imagicalnet_players (name, bio, rank) VALUES ('" . strtolower($username) . "', NULL, NULL)"; 
          $r_query2 = mysqli_query($con,$sql2); 
        }
        header("Location: ../$redirect");
     } else {
        header("Location: ../auth/?status=fail3&redirect=$redirect");
     }
  }
}
?>
