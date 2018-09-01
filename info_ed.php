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


if (isset($_SESSION['username'])) {
	$user = $_SESSION['username'];
	$results = mysqli_query($db, "SELECT * FROM users where username = '$user' "); 
	 while ($row = mysqli_fetch_array($results)) { 
		  $opp = $row['type'];
	}
	if($opp == "admin" AND $_SESSION['username'] == $user){
		$results = mysqli_query($db, "SELECT * FROM post  order by id DESC ");
        while ($row = mysqli_fetch_array($results)) {  ?>








        		<?php
			
        }}

}?>
<?php
$results = mysqli_query($db, "SELECT * FROM users  order by id ");
        while ($row = mysqli_fetch_array($results)) {  ?>

<from method="POST">
<div id="info">
<div class="name"><a href="profile.php?username=<?php echo $row['username']; ?>" style="color:#000;"><?php echo $row['real_name']; ?></a></div>
<div class="email"><?php echo $row['email']; ?></div>
<?php if($row['type'] == "user"){ ?> <button style="background-color:green;border:green solid 0.5px;color:#fff;"><a href="info_ed.php?op=<?php echo $row["id"]; ?>">Make an admin</a></button><?php }  
 if($row['type'] == "admin"){?><button style="background-color:red; color:#fff;border:red solid 0.5px;"><a href="info_ed.php?unop=<?php echo $row["id"]; ?>">Cancel admin</a></button><?php }
?>
</div>
</form>

        <?php } ?>

<?php

if (isset($_GET['op'])) {
    $id = $_GET['op'];
    mysqli_query($db, "UPDATE `users` SET `type`= 'admin' WHERE  id=$id");
    
}


if (isset($_GET['unop'])) {
    $id = $_GET['unop'];
    mysqli_query($db, "UPDATE `users` SET `type`= 'user' WHERE  id=$id");
    
}

?>

<style>
#info{width:400px; border:solid;margin:10px;display:inline-block; padding:5px;background-color:#fff;}
a{text-decoration: none; color:#fff;}
@media screen and (max-width: 865px) {

}
</style>