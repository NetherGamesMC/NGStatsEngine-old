<?php
ini_set('display_errors', '0');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: application/json; charset=utf-8');
include "config.php";

$dbhost     = $database["dbhost"];
$dbname     = $database["dbname"];
$dbusername = $database["dbusername"];
$dbpassword = $database["dbpassword"];

$db   = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
$sql  = "SELECT breaks, places, deaths, kicked, drops, joins, quits, chats, kills FROM player_stats WHERE name = :name";
$stmt = $db->prepare($sql);
$stmt->bindParam(':name', strtolower($_GET["name"]), PDO::PARAM_INT);
$stmt->execute();
$result = $stmt;

foreach ($result as $row) {
    $arr = array(
        'breaks' => $row['breaks'],
        'places' => $row['places'],
        'deaths' => $row['deaths'],
        'kicked' => $row['kicked'],
        'drops' => $row['drops'],
        'joins' => $row['joins'],
        'quits' => $row['quits'],
        'chats' => $row['chats'],
        'kills' => $row['kills']
    );
}
echo json_encode($arr, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>