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

<style>
 #post{width:300px;}
	</style>

<?php include "include/header.php"; ?>
<div id="all">


<?php
$db = mysqli_connect('localhost', 'root', '', 'news');

  

  $results = mysqli_query($db, "SELECT * FROM post order by id DESC"); ?>

    <?php while ($row = mysqli_fetch_array($results)) { ?>


		
                        <div id="post">

                <?php if($row['image']==""){?><center><div class="img"><img src="images/no1.png" width="100%"></div></center><?php }else{?><center><div class="img"><img src="images/<?php echo $row['image']; ?>" width="100%"></div></center><?php } ?>
                <div class="text-news">
                <a href="news.php?id=<?php echo $row['id']; ?> "><center><h4><?php echo $row['title']; ?></h4></center></a>

                <div>By : <a href="profile.php?username=<?php echo $row['username']; ?>"><?php echo $row['real_name']; ?></a></div>
                <div>Date :<?php echo $row['date']; ?> / <?php echo $row['clock']; ?> GMT</div>
                </div></div>

  <?php } ?> 

</div>








