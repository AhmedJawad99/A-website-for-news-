<!DOCTYPE html>
<html>
<head>
    <title>News</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
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

