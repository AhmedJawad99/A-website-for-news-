<?php 
    
	session_start(); 
     
	if (!isset($_SESSION['username'])) {
		header("location: login.php");
		
	}
	
	$db = mysqli_connect('localhost', 'root', '', 'news');
	$usser = $_SESSION['username'];
	$results = mysqli_query($db, "SELECT * FROM users where username = '$usser' "); 
	 while ($row = mysqli_fetch_array($results)) { 
		  $opp = $row['type'];
	}
	
	
	if ($opp != "admin") {
		header("location: index.php");
	
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

	<!-- notification message -->
		<?php  if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif  ?><?php

    include "include/header.php";
?>
<Br><br><br>

<?php
$db = mysqli_connect('localhost', 'root', '', 'news');
  $results = mysqli_query($db, "SELECT * FROM msg order by id DESC"); ?>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
<div id="msg">
<div class="name"><p>Name : <?php echo $row['name']; ?></p></div>
<div class="email"><p>Email : <?php echo $row['email']; ?></p></div>
<div class="history"><p>The history : <?php echo $row['history']; ?></p></div>

<div class="msg"><?php echo $row['msg']; ?></div>
</div>
<?php } ?> 




<style>
#msg{width:660px;height:auto; border:solid; background-color:#fff; margin:0 auto; border-top-right-radius:25px; padding:5px; margin-top:15px;}
#msg .msg{ height:115px; height:auto;}
@media screen and (max-width: 865px) {

	#msg{width:90%;height:auto; }
	#msg .msg{height:auto;}
}
</style>