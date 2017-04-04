<?php

$db_hostname = '127.0.0.1';
$db_username = 'imagicalnet';
$db_password = 'xxx';

$con = mysqli_connect($db_hostname,$db_username,$db_password);
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
