<?php
session_start();
include '_header.php';
$url = $vote["url"];
$key = $vote["key"];
$site = $site["url"];
$player = $_SESSION["username"];
?>

<div class='content'> 

<?php
if(!empty($vote["key"] && $vote["url"])) {

if(empty($_SESSION["username"])) {
 echo "
<div class='paper'>
<h2 class='content-subhead'>Vote</h2>
<p>If you login this page will notify you about your vote status, or if you prefer you can skip all of that and vote without logging in.</p>
<p><a href='$site/login'><input class='pure-button pure-button-primary' type='submit' value='Login'></a></p>
<p><a href='$url' target='_blank'><input class='pure-button pure-button-primary' type='submit' value='Vote'></a></p>
</div>
";
}

$topVoters = json_decode(file_get_contents("http://minecraftpocket-servers.com/api/?object=servers&element=voters&key=$key&month=current&format=json&limit=10"), true);
$voters = $topVoters["voters"];

$recentVoters = json_decode(file_get_contents("http://minecraftpocket-servers.com/api/?object=servers&element=votes&key=$key&month=current&format=json&limit=10"), true);
$votes = $recentVoters["votes"];

if(isset($_SESSION["username"])) {
$query = json_decode(file_get_contents("http://minecraftpocket-servers.com/api/?object=votes&element=claim&key=$key&username=$player"), true);
         
if ($query == 0) {
    echo "
<div class='paper'>
<h2 class='content-subhead'>Vote</h2>
<p>You haven't voted yet today!</p>
<p><a href='$url' target='_blank'><input class='pure-button pure-button-primary' type='submit' value='Vote'></a></p>
</div>";
} elseif ($query == 1) {
    echo "
<div class='paper'>
<h2 class='content-subhead'>Vote</h2>
<p>You have already voted today, but you haven't claimed your in-game rewards yet.</p>
</div>
";
} elseif ($query == 2) {
 echo "
<div class='paper'>
<h2 class='content-subhead'>Vote</h2>
<p>You have already voted and claimed your in-game rewards today! Don't forget to vote again tomorrow.</p>
</div>
";
} else {
   echo "
<div class='alert'>
<p>Error</p>";
}

echo "</div>";
}
?>

<table class="pure-table" style="width:100%;">
     <thead>
        <tr>
            <th>Top Voter</th>
            <th>Votes</th>
        </tr>
    </thead>
  <tr>
    <td><?php print_r($voters['0']['nickname']); ?></td>
    <td><?php print_r($voters['0']['votes']); ?></td>
  </tr>
  <tr>
    <td><?php print_r($voters['1']['nickname']); ?></td>
    <td><?php print_r($voters['1']['votes']); ?></td>
  </tr>
  <tr>
    <td><?php print_r($voters['2']['nickname']); ?></td>
    <td><?php print_r($voters['2']['votes']); ?></td>
  </tr>
  <tr>
    <td><?php print_r($voters['3']['nickname']); ?></td>
    <td><?php print_r($voters['3']['votes']); ?></td>
  </tr>
  <tr>
    <td><?php print_r($voters['4']['nickname']); ?></td>
    <td><?php print_r($voters['4']['votes']); ?></td>
  </tr>
  <tr>
    <td><?php print_r($voters['5']['nickname']); ?></td>
    <td><?php print_r($voters['5']['votes']); ?></td>
  </tr>
  <tr>
    <td><?php print_r($voters['6']['nickname']); ?></td>
    <td><?php print_r($voters['6']['votes']); ?></td>
  </tr>
  <tr>
    <td><?php print_r($voters['7']['nickname']); ?></td>
    <td><?php print_r($voters['7']['votes']); ?></td>
  </tr>
  <tr>
    <td><?php print_r($voters['8']['nickname']); ?></td>
    <td><?php print_r($voters['8']['votes']); ?></td>
  </tr>
  <tr>
    <td><?php print_r($voters['9']['nickname']); ?></td>
    <td><?php print_r($voters['9']['votes']); ?></td>
  </tr>
</table>
</div>
<?php
} else {
echo "<div class='paper'>
<h2 class='content-subhead'>Error</h2>
<p>Inside of the vote array enter the vote link for your server and enter the API key.</p>
</div>";
}
?>


<?php include '_footer.php'; ?>
