<?php include('server.php') ?>
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
            <a href="./login.html">Register/Login</a>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <h1 style="background-color:#7A33FF;text-align:center">Login</h1>
        <div class="main">
            <center>
                <div class="contrainer">
        
	        <form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div    class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div  class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div  class="input-group">
			<button type="submit" class="btn btn-primary" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>

	</form> 
</center>
        </div>

        <div class="clearfix"></div>
    </div>
    <div class="footer">

    </div>
</div>
</body>
</html>