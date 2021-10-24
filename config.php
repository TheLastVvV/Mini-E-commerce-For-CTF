<?php 
	session_start();

	// variable declaration
	$productname = "";
	$email    = "";
        $address    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'bootdb');

	// REGISTER USER
	if (isset($_POST['reg_order'])) {
		// receive all input values from the form
		$productname = mysqli_real_escape_string($db, $_POST['productname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($productname)) { array_push($errors, "Product name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($address)) { array_push($errors, "Address is required"); }

// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO orderlist (productname, email, address) 
					  VALUES('$productname','$email','$address')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: thankyou.php');
		}

	}

	// ... 


?>