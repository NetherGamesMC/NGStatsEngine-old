<?php
ini_set('display_errors', '0');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();
include "config.php";
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="canonical" href="<?php
echo $_SERVER['REQUEST_URI'];
?>" >
    <title><?php
echo $site["title"];
?></title>
    <meta name="description" content="<?php
echo $site["description"];
?>">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1 user-scalable=no">
    <style>
    <?php
include "style.php";
?>
    </style>
    <link rel="stylesheet" type="text/css" href="<?php
echo $site["url"];
?>/custom.css">
  </head>
  <body>
  <div class="pure-menu pure-menu-horizontal pure-menu-scrollable">
    
    <ul class="pure-menu-list">
<li class="pure-menu-item"><a href="<?php
echo $site["url"];
?>" class="pure-menu-link"><b><?php
echo $site["title"];
?></b></a></li>

<?php
if (!isset($_SESSION["username"])) {
?>
<li class="pure-menu-item"><a href="<?php
    echo $site["url"];
?>/auth" class="pure-menu-link">Login</a></li>
<?php
} else {
?>
<li class="pure-menu-item"><a href="<?php
    echo $site["url"];
?>/portal/logout" class="pure-menu-link">Logout</a></li>
<?php
}
?>
<li class="pure-menu-item"><a href="<?php
echo $site["url"];
?>/vote" class="pure-menu-link">Vote</a></li>
<li class="pure-menu-item"><a href="<?php
echo $site["url"];
?>/stats" class="pure-menu-link">Stats</a></li>
<?php
if (isset($_SESSION["username"])) {
?>
<li class="pure-menu-item"><a href="<?php
    echo $site["url"];
?>/portal/account" class="pure-menu-link">Account</a></li>
<?php
}
?>

<?php
if ($site["credit"] == true) {
    echo "
<li class='pure-menu-item'><a href='https://github.com/DALTONTASTIC/LAPIS' target='_blank' class='pure-menu-link'>LAPIS</a></li>
";
}
?>
    </ul>
</div>
