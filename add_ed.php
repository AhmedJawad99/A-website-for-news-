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

<form method="POST">
<div id="Add">
<center>
<h2>Add a new editor</h2><hr>
<input type="text" name="real" placeholder="real name">
<input type="text" name="user" placeholder="Username">
<input type="email" name="email" placeholder="Email">
<input type="password" name="pass" placeholder="Password">
<input type="password" name="pas2" placeholder="Re write a password">
<input type="submit" name="sent" value="Add" style="background-color:#469ebf;border:solid #469ebf; color:#fff; font-size:16px;">
<?php

if(isset($_POST['sent'])){
	$real = $_POST['real'];
	$user = $_POST['user'];
	$email = $_POST['email'];
	$pass = md5($_POST['pass']);
	$pas2 = md5($_POST['pas2']);
	if($pass != $pas2){echo "<div class='pass'>Password does not match</div>";}
	if(empty($real)){echo "<div class='pass'>A real name is required</div>";}
	if(empty($user)){echo "<div class='pass'>Username is required</div>";}
	if(empty($email)){echo "<div class='pass'>Email is required</div>";}
	
    else{$sql = "INSERT INTO users (real_name, username, password, email) VALUES ('$real','$user','$pass','$email')";
		// execute query
		mysqli_query($db, $sql);}
		echo "<div class='yes'>Done!</div>";
}
?>
</center>
</div>
</form>


<style>
.new-input{width:90%; font-size:20px;}
#Add{margin: 0 auto; width:550px; border:solid 0.5px; background-color:#fff; padding:10px;border-top-right-radius: 20px;
    border-bottom-left-radius: 20px;}
#Add input{width:90%; text-align:center; margin:5px; font-size:20px;}
.pass{background-color:red; color:#fff;margin-bottom:1px;}
.yes{background-color:green; color:#fff;}
@media screen and (max-width: 865px) {

#Add{width:90%; margin-top:40px;}
}
</style>