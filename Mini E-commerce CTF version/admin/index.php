<?php
session_start();

$userinfo = array(
                'admin'=>'admin',
                'user2'=>'password2'
                );

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:' . $_SERVER['PHP_SELF']);
}

if(isset($_POST['username'])) {
    if($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
    }else {
        //Invalid Login
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Login</title>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<body style="background-color:#7A33FF;">

  
    </head>
    <body>
        <?php if($_SESSION['username']): ?>
            <p>You are logged in as <?=$_SESSION['username']?></p>
 <p><a href="./orderlist.php">Order List</a></p>
             <p><a href="./ViewUsers.php">View Users</a></p>
            <p><a href="?logout=1">Logout</a></p>
        <?php endif; ?>
       <h1>Admin Panel</h1>
           <form name="login" action="" method="post">
            Username:  <input type="text" name="username" value="" /><br />
            Password:  <input type="password" name="password" value="" /><br />
            <input type="submit" name="submit" value="Submit" />
        </form>
    </body>
</html>