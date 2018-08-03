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

<div id="con"><Center>
<div class="input_co">
<input type="text" name="Name" placeholder="Your name">
<input type="text" name="email" placeholder="Your email">
<textarea id="text" 	cols="40" rows="4" 	name="message"  placeholder="Your message"></textarea>
 <br>
</div>
<div class="btn-send"> <input type="submit" name="send" value="send"> </div>
</div>