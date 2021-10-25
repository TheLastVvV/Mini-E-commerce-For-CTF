<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from users where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
	
    $edit = mysqli_query($db,"update users set username='$username', email='$email', password='$password' where id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:all_records.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="username" value="<?php echo $data['username'] ?>" placeholder="UserName" Required>
  <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter email" Required>
  <input type="text" name="password" value="<?php echo $data['password'] ?>" placeholder="Enter password" Required>
  <input type="submit" name="update" value="Update">
</form>
