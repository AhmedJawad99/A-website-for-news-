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
  <style>
#postnews{width: 500px; border: solid; margin-top:20px; background-color:#fff; 
	padding:10px; border-top-right-radius: 20px; border-bottom-left-radius: 20px;}
#postnews input{width:90%;}
#post{width:300px;}

#admin{margin:10px;}
#admin .admin{width:300px; height:100px; background-color:#f5760c; display: inline-block; margin:5px; margin-top:30px;}
#admin .admin p{color:#fff; margin:4px; text-align:center; margin-top:6px;}
@media screen and (max-width: 865px) {

#postnews{width:90%;}
#admin{margin-top:40px;}
#admin .admin{width:95%;}

}
 </style>
<?php 
include "include/header.php";
?>

<?php
$db = mysqli_connect('localhost', 'root', '', 'news');


if (isset($_SESSION['username'])) {
	$results = mysqli_query($db, "SELECT * FROM users where username = '$username' "); 
	 while ($row = mysqli_fetch_array($results)) { 
		  $opp = $row['type'];
	}
	if($opp == "admin" AND $_SESSION['username'] == $username){
		echo '<br>
<div id="admin">
<a href="add_ed.php"><div class="admin">
<p>
<i class="fa fa-user-plus fa-4x" aria-hidden="true" style="color:#fff;"></i>
</p>
<p>Add editor</p>
</div></a>



<a href="info_ed.php"><div class="admin" style="background-color:#28b779;">
<p>
<i class="fa fa-users fa-4x" aria-hidden="true" style="color:#fff;"></i>
</p>
<p>information of editors</p>
</div></a>



<a href="ed_news.php"><div class="admin" style="background-color:#28a9e3;">
<p>
<i class="fa fa-pencil fa-4x" aria-hidden="true" style="color:#fff;"></i>
</p>
<p>Edit the news</p>
</div></a>




<a href="msg.php"><div class="admin" style="background-color:#f74d4d;">
<p>
<i class="fa fa-envelope fa-4x" aria-hidden="true" style="color:#fff;"></i>
</p>
<p>The messages</p>
</div></a>





</div>';
	}
	
}

	$results = mysqli_query($db, "SELECT * FROM users where username = '$username' "); ?>
<?php while ($row = mysqli_fetch_array($results)) { 
     $re = $row['real_name'];
} ?> 	    
		<?php 
		
		if (isset($_SESSION['username'])){
			if($_SESSION['username'] == $username){
              echo '<center>';
              echo '<div id="postnews">';
              echo '<form method="POST" enctype="multipart/form-data">';
              echo '<textarea id="text" 	cols="40" rows="4" 	name="title"  placeholder="title"></textarea><br>';
              echo '<textarea id="text" 	cols="40" rows="4" 	name="news"  placeholder="the news"></textarea><br>';
              echo '<input type="file" name="image"><br><br>';
			  echo '<center><button type="submit" name="upload">POST</button></center><br><br>';

			  echo '</form>';
              echo '</div>';
			  echo '</center> ';
			}
		} 
		$db = mysqli_connect('localhost', 'root', '', 'news');	
		if (isset($_POST['upload'])) {
			$date = date("d-m-Y");
		  $userpost = $_SESSION['username'];
		  $title = $_POST['title'];
		  $news = $_POST['news'];
		  $clock = date("h:ia");
		   // Get image name
	 
		   $image = $_FILES['image']['name'];
		   // Get text
		   //$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	 
		   // image file directory
		   $target = "images/".basename($image);
	   
		   $sql = "INSERT INTO post (username, image, real_name, title, news , date, clock) VALUES ('$userpost', '$image', '$re', '$title' , '$news' , '$date', '$clock')";
		   // execute query
		   mysqli_query($db, $sql);
		   
		   if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			   $msg = "Image uploaded successfully";
		   }else{
			   $msg = "Failed to upload image";
		   }
	   }
	   $result = mysqli_query($db, "SELECT * FROM post");
	 ?>	

		



	
<?php
  

  $results = mysqli_query($db, "SELECT * FROM users where username = '$username'"); ?>
<?php while ($row = mysqli_fetch_array($results)) { 
     $re = $row['real_name'];
} ?> 
<h1>All news uploaded by <?php echo $re; ?></h1></center>

 <?php
  

  $results = mysqli_query($db, "SELECT * FROM post where username = '$username'  order by id DESC "); ?>
<?php while ($row = mysqli_fetch_array($results)) { ?>


	               <div id="post">

<?php if($row['image']==""){?><center><div class="img"><img src="images/no1.png" width="100%"></div></center><?php }else{?><center><div class="img"><img src="images/<?php echo $row['image']; ?>" width="100%"></div></center><?php } ?>
<div class="text-news">
<a href="news.php?id=<?php echo $row['id']; ?> "><center><h4><?php echo $row['title']; ?></h4></center></a>

<div>By : <a href="profile.php?username=<?php echo $row['username']; ?>"><?php echo $row['real_name']; ?></a></div>
<div>Date :<?php echo $row['date']; ?> / <?php echo $row['clock']; ?> GMT</div>
</div></div>

  <?php } ?> 


