
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	

	<div class="content">
<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		
	<?php include('config.php') ?>
<html>
<head>
    <meta charset="utf-8">
    <title>USB Bootable Shop</title>
    <link rel="stylesheet" type="text/css" href="./files/css/style.css">
   <style>

}
.input-group {
	margin: 10px 0px 10px 0px;
}

.input-group label {
	display: block;
	text-align:center;
	margin: 3px;

</style>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <div class="logo">
            <a href=./index.html"> USB Bootable Shop</a>
        </div>
        <div class="nav-bar">
            <a href="./index.html">Home</a>
            <a href="./about.html">About us</a>
            <a href="./contact.html">Contact us</a>
            <a href="./login.php">Register/Login</a>
            <div class="clearfix"></div>
        </div>
</div>
    <div class="container">
        <h1 style="background-color:#7A33FF;text-align:center">Order </h1>
        <div class="main">

	</div>
            <center>
                <div class="contrainer">

        <?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="welcome.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
	     <h2>Thank you for your order</h2>

</center>
        </div>

        <div class="clearfix"></div>
    </div>
    <div class="footer">

    </div>
</div>
</body>
</html>	
