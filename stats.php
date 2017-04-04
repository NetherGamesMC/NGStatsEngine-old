<?php
include "_header.php";
$name  = strtolower($_GET["name"]);
$url   = $site["url"];
$query = json_decode(file_get_contents("$url/api?name=$name"), true);
include 'includes/config.php';
$db_database = 'imagicalnet';
mysqli_select_db($con, $db_database);

$ratio = $query["kills"] / $query["deaths"];
?>
<div class="content">
<div class="paper">

<style>
td, tr, thead {
width: 33.33%;
max-width: 33.33%;
}
</style>

<?php
if (isset($_GET["name"])) {
$name = $_GET['name'];
?>
   <h2 class="content-subhead"><?php
    echo strip_tags($_GET["name"]);
?></h2>
<?php
    if ($query == null) {
?>
<p>No stats data available for this player.</p>
<?php
    } else {
$sql = "SELECT * FROM imagicalnet_players WHERE name='{$name}' LIMIT 1"; 
$r_query = mysqli_query($con,$sql); 
if($r_query->num_rows == 0) {
$bio = "No bio available for this player.";
} else {
$queryext = mysqli_fetch_array($r_query,MYSQLI_ASSOC);
$bio = $queryext['bio'];
}
?>

<form class='pure-form pure-form-stacked' action='' method='GET' enctype='multipart/form-data'> 
    <input type='text' placeholder='Name' name='name' class='form-control'>
  <p><input class='pure-button pure-button-primary' type='submit' value='Search'/></p>
</form>

<table class="pure-table" style="width:100%;">
    <thead>
        <tr>
            <th>Kills</th>
            <th>Deaths</th>
            <th>Ratio</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?php
        echo $query["kills"];
?></td>
            <td><?php
        echo $query["deaths"];
?></td>
            <td><?php
        echo $ratio;
?></td>
        </tr>
    </tbody>
</table>

<br>

<table class="pure-table" style="width:100%;">
    <thead>
        <tr>
            <th>Biography</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?php
        echo $bio;
?></td>
        </tr>
    </tbody>
</table>

<?php
    }
?>
<?php
} else {
    echo "
<h2 class='content-subhead'>Stats</h2>
<form class='pure-form pure-form-stacked' action='' method='GET' enctype='multipart/form-data'> 
    <input type='text' placeholder='Name' name='name' class='form-control'>
  <p><input class='pure-button pure-button-primary' type='submit' value='Search'/></p>
</form>
";
}
?>
</div>
</div>
<?php
include "_footer.php";
?>
