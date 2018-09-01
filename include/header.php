<?php $db = mysqli_connect('localhost', 'root', '', 'news'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>News</title>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min">
    <link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=alahed" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div id="header">
    <ul>
    <a href="index.php"><li>Home</li></a>
    <a href="about.php"><li>About</li></a>
    <a href="contact.php"><li>Contact</li></a>
    <?php if(!isset($_SESSION['username'])){
    echo '<a href="login.php"><li>Login</li></a>'; }
    else{
        
        echo '<a href="profile.php?username='.$_SESSION['username'].'"><li>profile</li></a>';
        echo '<a href="index.php?logout="1""><li>logout</li></a>';
         }

    ?>
</ul>
</div>
<style>
    @font-face {
   font-family: 'cairo-bold';
   src: url(fonts/cairo-bold.ttf);
    }
*{font-family: 'cairo-bold';}
body{background-color:#ccc; margin: 0px;}
#all{margin-top: 30px;}
#header{background-color: #000; padding-bottom:60px; }
#header ul{float: left;}
#header ul li{display: inline-block;padding-right: 25px;}
#header ul li:hover{border-bottom: solid #fff; padding-bottom: 12px;}
#header a{text-decoration: none; color: white;}
#post a{text-decoration: none; color: rgb(0, 0, 0);}
#post a:hover{text-decoration: underline;}
#post{border:solid; width: 300px; margin: 10px; box-shadow: #000 ;
    border-top-right-radius: 20px; border-bottom-left-radius: 20px; 
    background-color:rgb(255, 255, 255); display: inline-block;}
#post .img{width: 90%;}
#post .text-news{margin: 10px;}
#about{width: 65%; background-color: #fff; margin: 0 auto; 
    border: solid; margin-top: 30px; padding: 16px; border-top-right-radius: 20px; border-bottom-left-radius: 20px;}
   
    #con{width: 45%; background-color: #fff; margin: 0 auto; 
        border: solid; margin-top: 30px; padding: 16px; border-top-right-radius: 20px; border-bottom-left-radius: 20px;}    
.input_co input{display: block; width: 90%; margin-bottom: 7px; font-size: 17px;} 
textarea {
display: block;
width: 90%;
height: 100px;
overflow-y: scroll;
resize: vertical;
font-size: 16px;
font-family: inherit;}  

.btn-send input{width: 90%; background-color:#ccc ; color: rgb(44, 44, 44); font-size:16px; }




@media screen and (max-width: 865px) {
#all{margin-top: 70px;}    
#header{z-index: 1000; position: fixed; margin: 0px; top: 0px; width: 100%; height: 9px; }     
#post{width: 90%;}
#header ul li{padding-right: 15px;}
#header ul li:hover{border-bottom: solid #fff; padding-bottom: 25px;}
#about{margin-top: 80px;}
#con{margin-top: 80px; width: 90%;}
#header ul li{font-size:13px;}
}
</style>

