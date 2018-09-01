<?php 
	session_start(); 
     
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		
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
		<?php endif  ?>



<?php include "include/header.php"; ?>

<div id="about">
 <p>
 This a simple website to upload the news and you can add editor to upload with admin and you can see all news uploaded by editor.
  and you can see messages sent by the people to your website
 </p>
 <p>This website programmed by <a target="_blank" href="https://www.facebook.com/ahmed.jawad.5245">Ahmed Jawad</a></p>
</div>