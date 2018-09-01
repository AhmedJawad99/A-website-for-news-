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



                        
						<div id="ed_news">
				        <?php $d_id = $row['id']; ?>
						<div class="img"><?php if($row['image']==""){?><center><div class="img"><img src="images/no1.png" width="100%"></div></center><?php }else{?><center><div class="img"><img src="images/<?php echo $row['image']; ?>" width="100%"></div></center><?php } ?></div>
						<div class="title"><h2><a href="news.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h2></div>
						<div class="by">By : <a href="profile.php?username=<?php echo $row['username']; ?>"><?php echo $row['real_name']; ?></a></div>
						<div class="date">History : <?php echo $row['date']; ?> </div>
						<div class="del"><a href="ed_news.php?del=<?php echo $row['id']; ?>"><input name="" type="submit" value="Delete"></a></div>
						</div>
						


			<?php
			
				}}

		}
		if (isset($_GET['del'])) {
			$id = $_GET['del'];
			mysqli_query($db, "DELETE FROM post WHERE id=$id");
			
		}
		?>
	



<style>
#ed_news{ width:90%;  margin:0 auto; background-color:#fff; border-radius:14px; overflow: auto; margin-bottom:10px;}
#ed_news .img img{display:inline-block;  float:left; width:220px; height:120px; border-radius:14px; padding-right:5px;}
#ed_news .title{}
#ed_news .by{}
#ed_news .date{}
#ed_news .del input{background-color:red; border:solid red; color:#fff; width:100px;}
#ed_news .del input:hover{background-color:#fff; color:#000;}
a {    text-decoration: none; color:#000;}
a:hover{    text-decoration: underline;}

@media screen and (max-width: 865px) {
	#ed_news{height:auto;}
	#ed_news .img img{width:100%;}



}
</style>