<html>
<head>
  <title>Display all records from Database</title>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<body style="background-color:#7A33FF;">

</head>
<body>

<h2>Order List</h2>

<p><a href="./index.php"> Admin Panel</a></p>
<table border="2">
  <tr>
    <td>Id</td>
    <td>Product Name</td>
    <td>email</td>
    <td>Address</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from orderlist"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['productname']; ?></td>
    <td><?php echo $data['email']; ?></td> 
     <td><?php echo $data['address']; ?></td>      
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>
