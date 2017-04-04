<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {    
$username = $_SESSION['username'];
} else {
header('Location: ../auth/?redirect=portal/');
}
include "_header.php";
?>
<div class="content">

<div class="paper">
   <h2 class="content-subhead">Welcome back, <?php echo $username; ?></h2>
   <p>Click on an option to begin.</p>
</div>
</div>
<?php
include "_footer.php";
?>
