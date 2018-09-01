<?php 
	session_start(); 
	$id = $_GET['id'];
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<?php include "include/header.php"; ?>
<br>
<?php
$results = mysqli_query($db, "SELECT * FROM post WHERE id = '$id'"); ?>

<?php while ($row = mysqli_fetch_array($results)) { ?>
<div id="w_news">
<div class="title"><h1><?php echo $row['title']; ?></h1></div>
<div class="img"><?php if($row['image']==""){?><center><div class="img"><img src="images/no1.png" width="100%"></div></center><?php }else{?><center><div class="img"><img src="images/<?php echo $row['image']; ?>" width="100%"></div></center><?php } ?></div>
<div class="editor"><p>By : <a href="profile.php?username=<?php echo $row['username']; ?>"><?php echo $row['real_name']; ?></a> </p><p> History : <?php echo $row['date']; ?> / <?php echo $row['clock']; ?></p></div>

<div class="news_text"><p> <?php echo $row['news']; ?> </p></div>

</div>
<?php } ?> 

<style>
#w_news{margin: 0 auto; margin-top:10px; width:90%; background-color:#fff; padding:4px; border-bottom-right-radius: 15px; border-top-left-radius: 15px;}
#w_news .img{width:400px; display:inline-block; height:100px;}
#w_news .img img{ border-top-left-radius: 15px;}
#w_news .editor{width:40%; display:inline-block;} 
</style>
