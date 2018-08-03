<?php 
	session_start(); 
	$username = $_GET['username'];
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<?php 
include "include/header.php";
?>
<?php
$db = mysqli_connect('localhost', 'root', '', 'news');?>
	<!-- notification message -->
	    
		<?php 
		
		if (isset($_SESSION['username'])){
			if($_SESSION['username'] == $username){
              echo '<center>';
              echo '<div id="postnews">';
              echo '<form method="POST">';
              echo '<textarea id="text" 	cols="40" rows="4" 	name="title"  placeholder="title"></textarea><br>';
              echo '<textarea id="text" 	cols="40" rows="4" 	name="news"  placeholder="the news"></textarea><br>';
              echo '<input type="file" name="image"><br><br>';
			  echo '<input type="submit" name="" value="POST"><br><br>';

			  echo '</form>';
              echo '</div>';
			  echo '</center> ';
			}
		} ?>
			
		

		



	
<?php
  

  $results = mysqli_query($db, "SELECT * FROM users where username = '$username' "); ?>
<?php while ($row = mysqli_fetch_array($results)) { 
     $re = $row['real_name'];
} ?> 
<h1>All news uploaded by <?php echo $re; ?></h1></center>

 <?php
  

  $results = mysqli_query($db, "SELECT * FROM post where username = '$username' "); ?>
<?php while ($row = mysqli_fetch_array($results)) { ?>


	               <div id="post">

<center><div class="img"><img src="images/<?php echo $row['image']; ?>" width="100%"></div></center>
<div class="text-news">
<a href=""><center><h4><?php echo $row['title']; ?></h4></center></a>

<div>By : <a href="profile.php?username=<?php echo $row['username']; ?>"><?php echo $row['real_name']; ?></a></div>
<div>Date : <?php echo $row['date']; ?> / <?php echo $row['clock']; ?> GMT</div>
</div>

  <?php } ?> 

  <style>
#postnews{width: 500px; border: solid; margin-top:20px; background-color:#fff; 
	padding:10px; border-top-right-radius: 20px; border-bottom-left-radius: 20px;}
#postnews input{width:90%;}

 </style>
