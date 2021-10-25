<?php
session_start();
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'bootdb');

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$s =" select * from register where name ='$username'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num ==1){
echo" username already taken";
}else{
$reg="insert into register(name,password,email,phone) values ('$username' , '$password' , $email , $phone)";
mysqli_query($con,$reg);
echo"Registration Successful";
}
?>